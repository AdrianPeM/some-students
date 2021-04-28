<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $user = auth()->user();
        $subjects = $user->subjects();
        return view('subjects', compact('subjects'));
    }
}
