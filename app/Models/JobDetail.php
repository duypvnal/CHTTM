<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobDetail extends Model
{
    use HasFactory;

    protected $table = 'jobDetails';

    protected $fillable = [
       'start_date',
        'due_date',
        'location',
        'salary_form',
        'salary_to',
        'quantity',
        'level',
        'job_type',
        'gender',
        'skill_ids',
        'job_position_ids',
        'experience',
        'created_at'
    ];
}
