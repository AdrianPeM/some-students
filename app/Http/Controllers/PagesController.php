<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subject;
use App\Models\Career;
use App\Models\Specialty;
use App\Models\NotificationType;
use App\Models\UserToast;
use DB;
use Log;
use View;

class PagesController extends Controller
{

    public function __construct() {
        $this->middleware('auth')->except('welcome');
    }

    public function test()
    {
        $user = auth()->user();

        return $user->specialty;
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function index()
    {
        $user = auth()->user();
        $semester = $user->semester;
        $specialties = $this->specialtiesObj();


        $user->updateSubjectsStatuses();
        $subjectsObj = $this->subjectsGrid();
        $generalInfo = $this->progressInformation();

        /*-----------------------------NOTIFICATIONS------------------------*/
        $notifications = $user->notifications();

        View::share('notifications', $notifications);

        return view('reticula', compact('subjectsObj', 'semester', 'generalInfo', 'specialties'));
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
        $subjectsObj->semesters = $user->career->subjects->whereNull('specialty_id')->max('semester');

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

    public function progressInformation()
    {
        $user = auth()->user();
        $career = $user->career;
        $progressObj = new \stdClass();
        $accumulatedCredits = $user->credits()->approved_credits ?? 0;
        
        $subjectsByStatus = Subject::join('subject_status', 'subjects.id', 'subject_status.subject_id')
            ->select('status', DB::raw('COUNT(*) as cantidad'))
            ->where('user_id',auth()->id())->groupBy('status')->get();

        $schedule = Subject::join('subject_status', 'subjects.id', 'subject_status.subject_id')
            ->select('id','name', 'key', 'credits')
            ->where('user_id',auth()->id())->where('status','studying')->orderBy('id', 'asc')->get();
            
        $progressObj->career = $career->display_name;
        $progressObj->semester = $user->semester;
        $progressObj->totalSubjects = count($user->subjects());
        
        foreach ($subjectsByStatus as $status) {
            $progressObj->{$status->status} = $status->cantidad;
        }
        $progressObj->remainingSubjects = count($user->subjects()) - ($progressObj->completed ?? 0);
        $progressObj->coursingSubjects = $progressObj->studying ?? 0;
        $progressObj->unlockedSubjects = $progressObj->active ?? 0;
        $progressObj->coursedSubjects = $progressObj->completed ?? 0;
        $progressObj->blockedSubjects = $progressObj->blocked ?? 0;

        $progressObj->totalCredits = $career->total_credits;
        $progressObj->genericStructure = $career->generic_credits;
        $progressObj->residencesCredits = 10;
        $progressObj->socialServiceCredits = 10;
        $progressObj->otherCredits = 5;
        $progressObj->specialty = $user->specialty != null ? $user->specialty->name:'Sin seleccionar';
        $progressObj->specialtyCredits = $user->specialty != null ? $user->specialty->total_credits:0;
        $progressObj->accumulatedCredits = $accumulatedCredits;
        $progressObj->remainingCredits = $career->total_credits - $accumulatedCredits;
        $progressObj->schedule = $schedule;

        return $progressObj;
    }

    public function updateSemester(Request $request)
    {
        $user = auth()->user();
        $error = '';
        if($request->ss) {
            // $request->validate([
            //     'status' => 'required',
            // ]);
            $validStatus = true;
            if(!$request->status) {
                $messageInfo = 'El status no puede estar vacío';
                return back()->with('infoSubjStatus', $messageInfo);
            }

            switch($request->status) {
                case 'active':
                    $statStr = 'Desbloqueada';
                    break;
                case 'studying':
                    $statStr = 'Cursando';
                    break;
                case 'completed':
                    $statStr = 'Cursada';
                    break;
                default:
                    $statStr = 'No valido';
                    $validStatus = false;
                    break;
            }

            if($validStatus) {
                $semesterSubjects = Subject::where('semester', $request->ss)->select('id')->get();
                foreach ($semesterSubjects as $subject) {
                    if($subject->status()->status != 'blocked') {
                        $subject->updateStatus($request->status);
                        $subject->updateCounter(1);
                    }
                }
                $messageInfo = "Todas las materias del semestre <strong> $request->ss </strong> actualizadas a <strong> $statStr </strong>";
            } else {
                $messageInfo = 'El estatus no es válido';
            }

        } else if($request->sn){
            // $request->validate([
            //     'sn' => 'numeric|between:0,9',
            // ]);
            $semester = $request->sn;
            if(!is_numeric($semester) && ($semester < 0 || $semester > 9)){
                $messageInfo = 'Semestre no válido';
                return back()->with('infoSubjStatus', $messageInfo);
            }
            $user->updateSemester($request->sn);
            $messageInfo = 'Semestre actualizado a <strong>'. $request->semester .'</strong>.';
        }
        return back()->with('infoSubjStatus', $messageInfo);
    }

    public function specialtiesObj()
    {
        $user = auth()->user();
        $specialties = $user->specialties();
        $specialtiesObj = new \stdCLass();

        foreach ($specialties as $specialty) {
            $specialtiesObj->{$specialty->id} = [
                'id' => $specialty->id,
                'description' => $specialty->description,
                'specialty' => $specialty->name,
                'subjects' => $user->career->specialtiesSubjects->where('specialty_id', $specialty->id)];
        }

        return $specialtiesObj;
    }

    public function selectSpecialty(Request $request) {
        $user = auth()->user();
        if($user->specialties()->where('id', $request->specialty)->first() != null) {
            $user->selectSpecialty($request->specialty);
            $messageInfo = 'Has elegido la especialidad de <strong>'. $user->specialty->name .'</strong>. Se han agregado las materias de la especialidad.';
        } else {
            $messageInfo = 'La especialidad seleccionada no es valida';
        }
        return back()->with('infoSpecialty', $messageInfo);
    }

    public function removeSpecialty(Request $request) {
        $user = auth()->user();
        $user->removeSpecialty();
        
        return back();
    }

}
