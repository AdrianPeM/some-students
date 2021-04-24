<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialServiceReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'report_number', 'start_date', 'end_date', 'hours', 'report_type'
    ];
    
    public function socialService()
    {
        return $this->belongsTo(SocialService::class);
    }
}
