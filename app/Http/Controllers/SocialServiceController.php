<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialServiceController extends Controller
{
    public function index()
    {
        
        $user = auth()->user();

        $socialService = $user->socialService;
        $socialServiceReports = $user->socialServiceReports;
        return view('social_service', compact('socialService', 'socialServiceReports'));
    }
}
