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

    public function specialtySubjects()
    {
        return $this->specialty->subjects();
    }

    public function selectSpecialty($specialtyId) {
        $this->specialty_id = $specialtyId;
        $this->save();
    }

    public function removeSpecialty() //utilizar esta funcion cuando se quite o cambie de especialidad
    {
        $specialtySubjects = $this->specialtySubjects;

        foreach ($specialtySubjects as $subject) {
            DB::table('subject_status')->where('user_id', $this->id)->where('subject_id', $subject->id)->delete();
        }

        $this->specialty_id = null;
        $this->save();
    }

    public function notifications() {
        $notifications = $this->getNotifications()->chunk(10);

        $notificationsObj = [];
        if(count($notifications) > 0) {
            foreach ($notifications[0] as $notification) {
                $notification->content = $notification->pivot->content;
                $notification->date = UserNotification::returnDate($notification);
                array_push($notificationsObj, $notification);
            }
        }

        return $notificationsObj;
    }

    public function allNotifications() {
        $notifications = $this->getNotifications();

        $notificationsObj = [];
        foreach ($notifications as $notification) {
            $notification->content = $notification->pivot->content;
            $notification->date = UserNotification::returnDate($notification);
            array_push($notificationsObj, $notification);
        }

        return $notificationsObj;
    }

    public function setAdvice($notificationType, $content) {
        $toast = $this->setToast($notificationType, $content);
        $this->setNotification($notificationType, $content);
        return $toast;
    }

    public function setToast($notificationType, $content) {
        $toast = new UserToast();
        $toast->title = NotificationType::select('display_type')->where('type', $notificationType)->first()->display_type;
        $toast->icon = NotificationType::select('fa_icon')->where('type', $notificationType)->first()->fa_icon;
        $toast->iconColor = NotificationType::select('fa_color')->where('type', $notificationType)->first()->fa_color;
        $toast->message = $content;
        return $toast;
    }

    public function setNotification($notificationType, $content) {
        $notification_type = NotificationType::select('id')->where('type', $notificationType)->first();
        $notification = UserNotification::create([
            'user_id' => $this->id,
            'notification_type_id' => $notification_type->id,
            'content' => $content
        ]);
        $notification->save();
    }

    public function getNotifications() {
        $notifications = $this->belongsToMany(NotificationType::class, 'user_notifications','user_id','notification_type_id')
        ->withPivot('id','content','is_viewed','elapsed_hours','elapsed_minutes','elapsed_seconds','created_at')
        ->orderByDesc('pivot_created_at')
        ->get();

        return $notifications;
    }

    public function updateSubjectsStatuses()
    {
        foreach ($this->subjects() as $subject) {
            $subjStatus = $subject->status();
            if(($subjStatus->status != 'completed') && ($subjStatus->status != 'studying')) {
                if(($subject->semester <= $this->semester + 2) && !(count($subject->pendantChains()) > 0))
                {
                    switch($subjStatus->counter) {
                        case 1:
                            $subject->updateStatus('active');
                            break;
                        case 2:
                            $subject->updateStatus('second');
                            break;
                        default:
                            $subject->updateStatus('special');
                            break;
                    }
                } else {
                    $subject->updateStatus('blocked');
                }
            } else {
                if($subject->semester > $this->semester + 2) {
                    $subject->updateStatus('blocked');
                }
            }
        }
    }

    public function updateSemester($sem) {
        $this->semester = $sem;
        $this->save();
    }

    public function credits()
    {
        return Subject::join('subject_status', 'subjects.id', 'subject_status.subject_id')
        ->select(DB::raw('SUM(credits) as approved_credits'))
        ->where('user_id', $this->id)->where('status','completed')->first() ?? 0;
    }
}
