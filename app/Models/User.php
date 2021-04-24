<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use DB;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'career_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function career(){
        return $this->belongsTo(Career::class);
    }
    
    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }

    public function specialties()
    {
        return $this->career->specialties;
    }

    public function selectSpecialty($specialtyId) {
        $this->specialty_id = $specialtyId;
        $this->save();
    }

    public function complementaryActivities()
    {
        return $this->hasMany(ComplementaryActivity::class);
    }

    public function extracurriculars()
    {
        return $this->hasMany(Extracurricular::class);
    }

    public function socialService()
    {
        return $this->hasMany(SocialService::class);
    }

    public function socialServiceReports()
    {
        return $this->hasManyThrough(SocialServiceReport::class, SocialService::class);
    }

    public function residence()
    {
        return $this->hasOne(Residence::class);
    }

    public function subjects()
    {

        if($this->career_id != null) {
            $subjects = $this->specialty_id != null ? 
                $this->career->commonSubjects()->merge($this->specialty->subjects)
                :
                $this->career->commonSubjects();

                return $subjects;
        }
        return [];
    }

    // public function subjectsGrid()
    // {

    //     $career = $this->career;

    //     $subjects = Subject::select('id', 'name', 'key', 'semester', 'credits', 'competencies')
    //         ->where('career_id', $career->id)
    //         ->whereNull('specialty_id')->get();

    //     if($this->specialty_id != null) {
    //         $specialtySubjects = Subject::select('id', 'name', 'key', 'semester', 'credits', 'competencies')
    //             ->where('career_id', $career->id)
    //             ->where('specialty_id', $this->specialty_id)->get();
    //         $subjects = $subjects->merge($specialtySubjects);
    //     }

    //     //Generate Subjects Status
    //     foreach($subjects as $subject) {
    //         $exists = DB::table('subject_status')
    //             ->where('user_id', $this->id)
    //             ->where('subject_id', $subject->id)
    //             ->first();

    //         if(!($exists)) {
    //             DB::table('subject_status')->insert(
    //                 ['user_id' => $this->id, 'subject_id' => $subject->id, 'status' => 'blocked']
    //             );
    //         }
    //     }
    //     return $subjects;
    // }

    public function specialtySubjects()
    {
        return $this->specialty->subjects();
    }
    //Modify fields
    //return $user->specialtySubjects()->select('name')->get();

    // public function specialtiesSubjects()
    // {
    //     $user = User::findOrFail(auth()->id());
    //     $career = $this->careers->first();

    //     $subjects = Subject::select('id', 'name', 'semester', 'credits', 'required','competencies', 'specialty_id')
    //         ->where('career_id', $career->id)
    //         ->whereNotNull('specialty_id')->get();

    //     $subjectsObj = new \stdClass();
    //     $subjectsObj->specialties = Specialty::where('career_id', $career->id)->select('id','name','img_path','description')->get();

    //     foreach($subjects as $subject) {
    //         $specialtyName = $subject->specialty->name;
    //         $subject->chains = $subject->chains();

    //         if(isset($subjectsObj->$specialtyName)) {
    //             array_push($subjectsObj->$specialtyName, $subject);
    //         } else {
    //             $subjectsObj->{$specialtyName} = [];
    //             array_push($subjectsObj->$specialtyName, $subject);
    //         }
    //     }

    //     return $subjectsObj;
    // }

    // public function updateSubjectsStatuses()
    // {
    //     foreach ($this->subjectsGrid() as $subject) {
    //         $subjStatus = $subject->status();
    //         if(($subjStatus->status != 'completed') && ($subjStatus->status != 'studying')) {
    //             if(($subject->semester <= $this->semester + 2) && !(count($subject->pendantChains()) > 0))
    //             {
    //                 switch($subjStatus->counter) {
    //                     case 2:
    //                         $subject->updateStatus('second');
    //                         break;
    //                     case 3:
    //                         $subject->updateStatus('special');
    //                         break;
    //                     default:
    //                         $subject->updateStatus('active');
    //                         break;
    //                 }
    //             } else {
    //                 $subject->updateStatus('blocked');
    //             }
    //         } else {
    //             if($subject->semester > $this->semester + 2) {
    //                 $subject->updateStatus('blocked');
    //             }
    //         }
    //     }
    // }

    // public function updateSemester($sem) {
    //     DB::table('users')->where('id', auth()->id())->update(['semester' => $sem]);
    // }

    public function credits()
    {
        return Subject::join('subject_status', 'subjects.id', 'subject_status.subject_id')
        ->select(DB::raw('SUM(credits) as approved_credits'))
        ->where('user_id', $this->id)->where('status','completed')->first() ?? 0;
    }

    // public function selectSpecialty($specialtyId) {
    //     DB::table('users')->where('id', auth()->id())->update(['specialty_id' => $specialtyId]);
    // }

    // public function removeSpecialtySubjectStatus() //utilizar esta funcion cuando se quite o cambie de especialidad
    // {
    //     $career = $this->careers->first();
    //     $specialtySubjects = Subject::select('id')
    //                 ->where('career_id', $career->id)
    //                 ->where('specialty_id', $this->specialty_id)->get();

    //     foreach ($specialtySubjects as $subject) {
    //         DB::table('subject_status')->where('user_id', $this)->where('subject_id', $subject->id)->delete();
    //     }
    // }
}
