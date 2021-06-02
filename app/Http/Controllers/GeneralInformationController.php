<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneralInformation;
use View;

class GeneralInformationController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $generalInformation = GeneralInformation::all()->groupBy('type');

        /*-----------------------------NOTIFICATIONS------------------------*/
        $notifications = auth()->user()->notifications();

        View::share('notifications', $notifications);

        // return [$generalInformation["servicio social"]];
        return view('general-information', compact('generalInformation'));
    }
}
