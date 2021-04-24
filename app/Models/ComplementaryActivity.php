<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComplementaryActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'period', 'revision_date', 'hours'
    ];
}
