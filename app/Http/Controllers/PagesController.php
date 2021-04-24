<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Career;
use App\Models\Specialty;
use DB;
use Log;

class PagesController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except('welcome');
    }

    public function test()
    {
        $user = auth()->user();
        // $specialtyId = 4;

        // if($user->specialties()->where('id', $specialtyId)->first() != null) {
        //     $user->selectSpecialty($specialtyId);
        //     $messageInfo = 'Has elegido la especialidad de <strong>'. $user->specialty->name .'</strong>. Se han agregado las materias de la especialidad.';
        // } else {
        //     $messageInfo = 'La especialidad seleccionada no es valida';
        // }
        // return $messageInfo;

        return count($user->subjects());
    }

    public function welcome()
    {
        return view('welcome');
    }
    
    public function dashboard()
    {
        return view('dashboard');
    }

    public function principal(){
        /*-------------------------------USER-------------------------------*/
        $user = auth()->user();

        // $user->updateSubjectsStatuses();

        /*-------------------------------SUBJECTS--------------------------------*/
        $subjectsObj = $this->subjectsGrid();
        
        /*-------------------------------SUBJECTS--------------------------------*/
        $specialtiesSubjects = count($user->career->specialtiesSubjects);
        
        /*-------------------------------GENERAL INFO----------------------------*/
        $progressInformation = $this->progressInformation();
        
        /*-------------------------------CARNET----------------------------------*/
        $complementaryActivities = $user->complementaryActivities;
        
        /*-------------------------------EXTRACURRICULARS------------------------*/
        $extracurriculars = $user->extracurriculars;
        
        /*-------------------------------SOCIAL SERVICE--------------------------*/
        $socialService = $user->socialService;
        $socialServiceReports = $user->socialServiceReports;

        return compact('specialtiesSubjects', 'complementaryActivities','extracurriculars','socialService','socialServiceReports');
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
            $subject->chains = $subject->chains();
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

    public function progressInformation()
    {
        $user = auth()->user();
        $career = $user->career;
        $progressObj = new \stdClass();
        $completedCredits = $user->credits()->approved_credits ?? 0;
        $subjectsStatus = Subject::join('subject_status', 'subjects.id', 'subject_status.subject_id')
            ->select('status', DB::raw('COUNT(*) as cantidad'))
            ->where('user_id',auth()->id())->groupBy('status')->get();

        $progressObj->career = $career->display_name;
        $progressObj->total_subjects = count($user->subjects());
        foreach ($subjectsStatus as $status) {
            $progressObj->{$status->status} = $status->cantidad;
        }
        $progressObj->remaining_subjects = count($user->subjects()) - (isset($progressObj->completed) ? $progressObj->completed:0);
        $progressObj->coursing_subjects = isset($progressObj->studying) ? $progressObj->studying:0;
        $progressObj->unlocked_subjects = isset($progressObj->active) ? $progressObj->active:0;
        $progressObj->coursed_subjects = isset($progressObj->completed) ? $progressObj->completed:0;
        $progressObj->blocked_subjects = isset($progressObj->blocked) ? $progressObj->blocked:0;
        $progressObj->total_credits = $career->total_credits;
        $progressObj->generic_structure = $career->generic_structure;
        $progressObj->residences_credits = 10;
        $progressObj->social_service_credits = 10;
        $progressObj->other_credits = 5;
        $progressObj->specialty = $user->specialty != null ? $user->specialty->name:'Sin seleccionar';
        $progressObj->specialty_credits = $user->specialty != null ? $user->specialty->total_credits:0;
        $progressObj->accumulated_credits = $completedCredits;
        $progressObj->remaining_credits = $career->total_credits - $completedCredits;

        return $progressObj;
    }

    public function selectSpecialty(Request $request) {
        $user = auth()->user();
        if($user->specialties()->where('id', $specialtyId)->first() != null) {
            $user->selectSpecialty($request->specialty_selection);
            $messageInfo = 'Has elegido la especialidad de <strong>'. $user->specialty->name .'</strong>. Se han agregado las materias de la especialidad.';
        } else {
            $messageInfo = 'La especialidad seleccionada no es valida';
        }
        // auth()->user()->updateSubjectsStatuses();
        return back()->with('infoSpecialty', $messageInfo);
    }

}