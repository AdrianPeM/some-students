<?php

namespace App\Http\Controllers;

use App\Http\Requests\SocialServiceReportRequest;
use App\Models\SocialServiceReport;
use App\Models\SocialService;
use View;

class SocialServiceReportController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
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

        return view('social_service.social_service_report.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SocialServiceReportRequest $request)
    {
        $user = auth()->user();

        $data = [
            "start_date" => $request->start_period,
            "end_date" => $request->end_period,
            "report_number" => count($user->socialServiceReports) + 1,
            "hours" => $request->bimester_total_hours,
            "report_type" => $request->report_type
        ];

        $report = $user->socialService->reports()->create($data);

        // $socialServiceReport = new SocialServiceReport();
        // $socialServiceReport->report_number = count(SocialServiceReport::all()) + 1;
        // $socialServiceReport->start_date = $request->input('start_period');
        // $socialServiceReport->end_date = $request->input('end_period');
        // $socialServiceReport->hours = $request->input('bimester_total_hours');
        // $socialServiceReport->report_type = $request->input('report_type');
        // $socialServiceReport->social_service_id = SocialService::select('id')->where('user_id',auth()->user()->id)->get()[0]->id;
        // $socialServiceReport->save();

        $socialService = $user->socialService;
        $socialService->accum_hours += $report->hours;
        $socialService->save();
        
        $message = 'Registro exitoso del reporte <strong>'.$report->report_number.'</strong> de <strong>servicio social</strong>.';
        $notificationType = 'servicio_social';
        $toast = $user->setAdvice($notificationType, $message);

        return redirect()->route('servicio_social')->with('toast_obj', $toast);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SocialServiceReport  $socialServiceReport
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialServiceReport $socialServiceReport)
    {
        $user = auth()->user();

        /*-----------------------------NOTIFICATIONS------------------------*/
        $notifications = $user->notifications();

        View::share('notifications', $notifications);
        return view('social_service.social_service_report.edit', compact('socialServiceReport'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SocialService  $socialService
     * @return \Illuminate\Http\Response
     */
    public function update(SocialServiceReportRequest $request, SocialServiceReport $socialServiceReport)
    {
        $user = auth()->user();
        $hours = $request->bimester_total_hours - $socialServiceReport->hours;

        $data = [
            "start_date" => $request->start_period,
            "end_date" => $request->end_period,
            "hours" => $request->bimester_total_hours,
            "report_type" => $request->report_type
        ];

        $socialServiceReport->update($data);
        
        $socialService = $user->socialService;
        $socialService->accum_hours += $hours;
        $socialService->save();

        $message = 'Actualización exitosa del reporte <strong>'.$socialServiceReport->report_number.'</strong> de <strong>servicio social</strong>.';
        $notificationType = 'servicio_social';
        $toast = $user->setAdvice($notificationType, $message);

        return redirect()->route('servicio_social')->with('toast_obj', $toast);
    }

    public function destroy(SocialServiceReport $socialServiceReport)
    {
        $user = auth()->user();

        $message = "Se ha eliminado el reporte <strong>".$socialServiceReport->report_number."</strong> de <strong>Servicio social</strong>.";

        $socialServiceReport->delete();

        $toast = $user->setAdvice('servicio_social', $message);

        return back()->with('toast_obj', $toast);
    }
}
