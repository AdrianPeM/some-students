<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        /*-----------------------------NOTIFICATIONS------------------------*/
        $notifications = $user->notifications();

        View::share('notifications', $notifications);
        return view('complementary_activities');
    }
}
