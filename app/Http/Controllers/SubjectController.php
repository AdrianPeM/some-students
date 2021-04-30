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
        $subjectsObj = $this->subjectsGrid();
        return view('subjects', compact('subjectsObj'));
        // return [$this->subjectsGrid()];
    }

    public function subjectsGrid()
    {
        $user = auth()->user();

        $subjectsObj = new \stdClass();
        $subjects = $user->subjects();
        $subjectsObj->semesters = 9;

        foreach($subjects as $subject) {
            $sem = $subject->semester;
            $subject->credits = $subject->credits;
            $subject->status = $subject->status()->status;
            $subject->chains = $subject->chains;
            $subject->pendantChains = $subject->pendantChains();

            if(isset($subjectsObj->$sem)) {
                array_push($subjectsObj->$sem, $subject);
            } else {
                $subjectsObj->{$sem} = [];
                array_push($subjectsObj->$sem, $subject);
            }
        }

        return $subjectsObj;
    }
}
