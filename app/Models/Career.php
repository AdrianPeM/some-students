<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    public function specialties(){
        return $this->hasMany(Specialty::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    public function commonSubjects($select = '*')
    {
        return $this->subjects()->whereNull('specialty_id')->select($select)->get();
    }

    public function specialtiesSubjects()
    {
        return $this->hasManyThrough(Subject::class, Specialty::class);//->select('subjects.name');
    }
}
