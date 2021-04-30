<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class ExtracurricularController extends Controller
{
    public function index()
    {
        /*-------------------------------USER-------------------------------*/
        $user = auth()->user();

        /*-----------------------------NOTIFICATIONS------------------------*/
        $notifications = $user->notifications();

        View::share('notifications', $notifications);

        return view('extracurriculars');
    }
}
