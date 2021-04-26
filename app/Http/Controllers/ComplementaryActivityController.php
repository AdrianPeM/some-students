<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplementaryActivityController extends Controller
{
    public function index()
    {
        return view('complementary_activities');
    }
}
