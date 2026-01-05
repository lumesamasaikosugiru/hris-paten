<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JobVacancy extends Model
{
    //
    protected $fillable =
        [
            'job_title',
            'job_desc',
            'requirements',
            'salary',
        ];

    public function jobApplicants(): HasMany
    {
        return $this->hasMany(JobApplicant::class, 'job_vacancy_id');
    }
}
