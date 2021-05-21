<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SocialServiceRequest;
use App\Models\SocialService;
use App\Models\SocialServiceReport;
use DB;
use View;

class SocialServiceController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {

        $user = auth()->user();

        $socialService = $user->socialService;
        $socialServiceReports = $user->socialServiceReports;

        /*-----------------------------NOTIFICATIONS------------------------*/
        $notifications = $user->notifications();

        View::share('notifications', $notifications);

        return view('social_service', compact('socialService', 'socialServiceReports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();

        /*-----------------------------NOTIFICATIONS------------------------*/
        $notifications = $user->notifications();

        View::share('notifications', $notifications);

        return view('social_service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SocialServiceRequest $request)
    {
        //dd($request);
        $socialService = new SocialService();
        $socialService->start_date = $request->input('fecha_inicio');
        $socialService->organization = (is_null($request->input('dependencia')) ? 'sin especificar' : $request->input('dependencia'));
        $socialService->program = (is_null($request->input('programa')) ? 'sin especificar' : $request->input('programa'));
        $socialService->hours_add = $request->input('horas_estandar');
        $socialService->accum_hours = (is_null($request->input('horas_acumuladas'))) ? 0 : $request->input('horas_acumuladas');
        $socialService->user_id = auth()->user()->id;
        $socialService->save();
        if(!is_null($request->input('start_period')) ||
            !is_null($request->input('end_period')) ||
            !is_null($request->input('bimester_total_hours')) ||
            !is_null($request->input('acummulated_hours'))) {
                $socialServiceReports = new SocialServiceReport();
                $socialServiceReports->report_number = $request->input('report_number');
                $socialServiceReports->start_date = $request->input('start_period');
                $socialServiceReports->end_date = $request->input('end_period');
                $socialServiceReports->hours = $request->input('bimester_total_hours');
                $socialServiceReports->report_type = $request->input('report_type');
                $socialServiceReports->social_service_id = SocialService::select('id')->where('user_id',auth()->user()->id)->get()[0]->id;
                $socialServiceReports->save();
        }

        $user = auth()->user();
        $message = 'Registro exitoso del <strong>servicio social</strong>.';
        $notificationType = 'servicio_social';
        $toast = $user->setAdvice($notificationType, $message);

        return redirect()->route('servicio_social')->with('toast_obj', $toast);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SocialService  $socialService
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialService $socialService)
    {
        $user = auth()->user();
        
        /*-----------------------------NOTIFICATIONS------------------------*/
        $notifications = $user->notifications();

        View::share('notifications', $notifications);
        return view('social_service.edit', compact('socialService'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SocialService  $socialService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialService $socialService)
    {
        $socialService->start_date = $request->input('fecha_inicio');
        $socialService->organization = (is_null($request->input('dependencia')) ? 'sin especificar' : $request->input('dependencia'));
        $socialService->program = (is_null($request->input('programa')) ? 'sin especificar' : $request->input('programa'));
        $socialService->hours_add = $request->input('horas_estandar');
        $socialService->accum_hours = (is_null($request->input('horas_acumuladas'))) ? 0 : $request->input('horas_acumuladas');
        $socialService->user_id = auth()->user()->id;
        $socialService->save();
        if(!is_null($request->input('start_period')) ||
            !is_null($request->input('end_period')) ||
            !is_null($request->input('bimester_total_hours')) ||
            !is_null($request->input('acummulated_hours'))) {
                //$socialServiceReports = new SocialServiceReport();
                $socialServiceReports->report_number = $request->input('report_number');
                $socialServiceReports->start_date = $request->input('start_period');
                $socialServiceReports->end_date = $request->input('end_period');
                $socialServiceReports->hours = $request->input('bimester_total_hours');
                $socialServiceReports->report_type = $request->input('report_type');
                $socialServiceReports->social_service_id = SocialService::select('id')->where('user_id',auth()->user()->id)->get()[0]->id;
                $socialServiceReports->save();
        }

        $user = auth()->user();
        $message = 'Actualización exitosa del <strong>servicio social</strong>.';
        $notificationType = 'servicio_social';
        $toast = $user->setAdvice($notificationType, $message);

        return view('social_service', compact('socialService'));
    }

    public function addHours() {
        return back();
    }

    public function addHoursPost(Request $request) {
        DB::update('update social_services set accum_hours = ? where user_id = ?', [$request->accum_hours + $request->add_hours, auth()->user()->id]);
        return response()->json(['success'=>'Hours added']);
    }

    public function removeHours() {
        return back();
    }

    public function removeHoursPost(Request $request) {
        DB::update('update social_services set accum_hours = ? where user_id = ?', [$request->accum_hours - $request->remove_hours, auth()->user()->id]);
        return response()->json(['success'=>'Hours removed']);
    }
}
