<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResidenceController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $residence = $user->residence;
        return view('residence', compact('residence'));
    }
}
