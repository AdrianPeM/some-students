<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class ResidenceController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $residence = $user->residence;

        /*-----------------------------NOTIFICATIONS------------------------*/
        $notifications = $user->notifications();

        View::share('notifications', $notifications);

        return view('residence', compact('residence'));
    }
}
