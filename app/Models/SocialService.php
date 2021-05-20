<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialService extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date', 'organization', 'program', 'hours', 'hours_counter'
    ];

    public function reports()
    {
        return $this->hasMany(SocialServiceReport::class);
    }


}
