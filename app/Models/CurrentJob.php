<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentJob extends Model
{
    use HasFactory;

    const JOB_TYPE = [
        'Toàn thời gian',
        'Bán thời gian',
        'Hybrid',
        'Remote'
    ];

    protected $table = 'current_jobs';

    protected $fillable = [
        'name',
        'category_id',
        'company_id',
        'due_date',
        'salary_form',
        'salary_to',
        'quantity',
        'level',
        'experience',
        'gender',
        'job_position_ids',
        'skill_ids',
        'job_type',
        'created_at'
    ];

    protected $casts = [
        'skill_ids' => 'array',
        'job_position_ids' => 'array',
    ];

    public function company(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

}
