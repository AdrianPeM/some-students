<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

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

    public function updateStatus(Request $request)
    {
        $user = auth()->user();
        $subject = Subject::findOrFail($request->id);
        $notificationType = 'avance_reticular';

        switch ($request->status) {
            case 'active':
                $stat = $subject->status()->status;
                if($stat != 'active' && $stat != 'second' && $stat != 'special') {
                    $counter = $subject->status()->counter + 1;
                    $subject->updateCounter($counter);

                    switch ($counter) {
                        case 2:
                            $statStr = 'Reprobada';
                            break;
                        case 3:
                            $statStr = 'Curso especial';
                            break;
                    }
                } else {
                    $statStr = 'Desbloqueada';
                }
                break;
            case 'studying':
                $statStr = 'Cursando';
                break;
            case 'completed':
                $statStr = 'Cursada';
                break;
            default:
                $statStr = 'Ninguno';
                break;
        }

        if($subject->status()->status != $request->status)
            $subject->updateStatus($request->status);

        $message = 'Estatus de la materia <strong>'.$subject->name.'</strong> actualizado a <strong>'.$statStr.'</strong>';

        $toast = $user->setAdvice($notificationType, $message);

        return back()->with('subjectStatusUpdated', $toast);
    }
}
