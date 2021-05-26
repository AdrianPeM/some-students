<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExtracurricularRequest;
use App\Models\Extracurricular;
use View;

class ExtracurricularController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index()
    {
        /*-------------------------------USER-------------------------------*/
        $user = auth()->user();

        $extracurriculars = $user->extracurriculars;

        $currentExtracurricular = $extracurriculars->pop();
        $coursedExtracurriculars = $extracurriculars;

        /*-----------------------------NOTIFICATIONS------------------------*/
        $notifications = $user->notifications();

        View::share('notifications', $notifications);

        return view('extracurriculars', compact('coursedExtracurriculars', 'currentExtracurricular'));
    }

    public function create()
    {
        $user = auth()->user();

        /*-----------------------------NOTIFICATIONS------------------------*/
        $notifications = $user->notifications();
        View::share('notifications', $notifications);
        
        return view('extracurriculars.create');
    }

    public function store(ExtracurricularRequest $request)
    {
        $user = auth()->user();
        $data = $request->all();
        $data["number"] = $user->extracurriculars->max('number') + 1;

        $user->extracurriculars()->create($data);
        

        $message = 'Registro exitoso de <strong>Actividad Extraescolar</strong>.';
        $toast = $user->setAdvice('extraescolares', $message);

        return redirect()->route('extraescolares')->with('toast_obj', $toast);
    }

    public function show($id)
    {
        //
    }

    public function edit(Extracurricular $extracurricular)
    {
        $user = auth()->user();

        /*-----------------------------NOTIFICATIONS------------------------*/
        $notifications = $user->notifications();
        View::share('notifications', $notifications);
        
        return view('extracurriculars.edit', compact('extracurricular'));
    }

    public function update(ExtracurricularRequest $request, Extracurricular $extracurricular)
    {
        $user = auth()->user();
        $extracurricular->update($request->all());

        $message = "Actualizacion exitosa de <strong>$extracurricular->name</strong>.";
        $toast = $user->setAdvice('extraescolares', $message);

        return redirect()->route('extraescolares')->with('toast_obj', $toast);
    }

    public function destroy(Extracurricular $extracurricular)
    {
        $user = auth()->user();

        $message = "Se ha eliminado la actividad <strong>$extracurricular->name</strong>.";
        $toast = $user->setAdvice('extraescolares', $message);
        
        $extracurricular->delete();
        return back()->with('toast_obj', $toast);
    }
}