<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRequirement extends Model
{
    use HasFactory;

    protected $table = 'user_requirements';

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

    protected $casts = [
        'skill_ids' => 'array',
        'job_position_ids' => 'array',
        'category_ids' => 'array',
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function skills(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Skill::class);
    }
}
