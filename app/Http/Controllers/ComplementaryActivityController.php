<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ComplementariActivityRequest;
use App\Models\ComplementaryActivity;
use View;

class ComplementaryActivityController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index()
    {
        /*-------------------------------USER-------------------------------*/
        $user = auth()->user();

        $complementaryActivities = $user->complementaryActivities;
        $accumulatedHours = $complementaryActivities->sum('hours');
        $remainingHours = 60 - $accumulatedHours;

        /*-----------------------------NOTIFICATIONS------------------------*/
        $notifications = $user->notifications();

        View::share('notifications', $notifications);
        return view('complementary-activities', compact('complementaryActivities', 'accumulatedHours', 'remainingHours'));
    }

    public function create()
    {
        $user = auth()->user();

        /*-----------------------------NOTIFICATIONS------------------------*/
        $notifications = $user->notifications();
        View::share('notifications', $notifications);

        return view('complementary_activities.create');
    }

    public function store(ComplementariActivityRequest $request)
    {
        $user = auth()->user();

        $user->complementaryActivities()->create($request->all());
        

        $message = 'Registro exitoso de <strong>Actividad Complementaria</strong>.';
        $toast = $user->setAdvice('extraescolares', $message);

        return redirect()->route('actividades_complementarias')->with('toast_obj', $toast);
    }

    public function show($id)
    {

    }

    public function edit(ComplementaryActivity $complementaryActivity)
    {
        $user = auth()->user();

        /*-----------------------------NOTIFICATIONS------------------------*/
        $notifications = $user->notifications();
        View::share('notifications', $notifications);

        return view('complementary_activities.edit', compact('complementaryActivity'));
    }

    public function update(ComplementariActivityRequest $request, ComplementaryActivity $complementaryActivity)
    {
        $user = auth()->user();
        $complementaryActivity->update($request->all());

        $message = "Actualizacion exitosa de <strong>$complementaryActivity->name</strong>.";
        $toast = $user->setAdvice('extraescolares', $message);

        return redirect()->route('actividades_complementarias')->with('toast_obj', $toast);
    }

    public function destroy(ComplementaryActivity $complementaryActivity)
    {

        $user = auth()->user();

        $message = "Se ha eliminado la actividad <strong>$complementaryActivity->name</strong>.";
        $toast = $user->setAdvice('extraescolares', $message);
        
        $complementaryActivity->delete();
        return back()->with('toast_obj', $toast);
    }

}
