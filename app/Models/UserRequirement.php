<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRequirement extends Model
{
    use HasFactory;

    protected $table = 'userRequirements';

    protected $fillable = [
        'user_id',
        'gender',
        'skill_ids',
        'job_position_ids',
        'category_id',
        'experience',
        'salary_expect',
        'location',
        'created_at'
    ];
}
