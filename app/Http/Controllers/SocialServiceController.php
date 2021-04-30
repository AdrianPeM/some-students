<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
