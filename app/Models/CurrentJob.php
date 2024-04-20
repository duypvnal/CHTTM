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
        'company_id',
        'salary_form',
        'salary_to',
        'experience',
        'gpa_from',
        'job_type',
        'created_at'
    ];

    public function company(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

}
