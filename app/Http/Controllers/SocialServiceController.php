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
        $user = auth()->user();
        
        foreach ($request->all() as $key => $value) {
            if(is_null($value)) {
                unset($request[$key]);
            }
        }
        
        $socialService = $user->socialService()->create($request->all());
        
        // $socialService = new SocialService();
        // $socialService->start_date = $request->input('start_date');
        // $socialService->organization = (is_null($request->input('organization')) ? 'sin especificar' : $request->input('organization'));
        // $socialService->program = (is_null($request->input('program')) ? 'sin especificar' : $request->input('program'));
        // $socialService->hours_add = $request->input('hours_add');
        // $socialService->accum_hours = (is_null($request->input('accum_hours'))) ? 0 : $request->input('accum_hours');
        // $socialService->user_id = auth()->user()->id;
        // $socialService->save();

        $reportsCount = $request->input('reports_count');

        for ($i=1; $i <= $reportsCount; $i++) {
            // $socialServiceReports = new SocialServiceReport();
            // $socialServiceReports->report_number = $request->input('report_number'.($i+1).'');
            // $socialServiceReports->start_date = $request->input('start_period'.($i+1).'');
            // $socialServiceReports->end_date = $request->input('end_period'.($i+1).'');
            // $socialServiceReports->hours = $request->input('bimester_total_hours'.($i+1).'');
            // $socialServiceReports->report_type = $request->input('report_type'.($i+1).'');
            // $socialServiceReports->social_service_id = SocialService::select('id')->where('user_id',auth()->user()->id)->get()[0]->id;
            // $socialServiceReports->save();

            if(!is_null($request->input("report_number$i")) && !is_null($request->input("start_period$i"))
                && !is_null($request->input("bimester_total_hours$i")) && !is_null($request->input("report_type$i")) ) {
                    $report = [
                        "report_number" => $request->input("report_number$i"),
                        "start_date" => $request->input("start_period$i"),
                        "end_date" => $request->input("end_period$i"),
                        "hours" => $request->input("bimester_total_hours$i"),
                        "report_type" => $request->input("report_type$i")
                    ];
                    
                    $report = $user->socialService->reports()->create($report);
        
                    $socialService->accum_hours += $report->hours;
                    $socialService->save();
                }
        }

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
    public function update(SocialServiceRequest $request, SocialService $socialService)
    {
        $user = auth()->user();
        $socialService->update($request->all());

        $message = 'Actualización exitosa del <strong>servicio social</strong>.';
        $notificationType = 'servicio_social';
        $toast = $user->setAdvice($notificationType, $message);

        return redirect()->route('servicio_social')->with('toast_obj', $toast);
    }

    public function addHours() {
        return back();
    }

    public function addHoursPost(Request $request) {
        DB::update('update social_services set accum_hours = ? where user_id = ?', [$request->accum_hours, auth()->user()->id]);
        return response()->json(['success'=>'Hours added']);
    }

    public function removeHours() {
        return back();
    }

    public function removeHoursPost(Request $request) {
        DB::update('update social_services set accum_hours = ? where user_id = ?', [$request->accum_hours, auth()->user()->id]);
        return response()->json(['success'=>'Hours removed']);
    }

    public function destroy(SocialService $socialService)
    {
        $user = auth()->user();

        $message = "Se ha eliminado el <strong>Servicio social</strong>.";
        $toast = $user->setAdvice('servicio_social', $message);

        $socialService->delete();
        return back()->with('toast_obj', $toast);
    }
}
