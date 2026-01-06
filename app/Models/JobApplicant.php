<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobApplicant extends Model
{
    //
    protected $fillable =
        [
            'applicant_biodata_id',
            'job_vacancy_id',
            'status',
            'date_submitted',
        ];

    public function applicantBiodata(): BelongsTo
    {
        return $this->belongsTo(ApplicantBiodata::class, 'applicant_biodata_id');
    }

    public function jobVacancy(): BelongsTo
    {
        return $this->belongsTo(JobVacancy::class, 'job_vacancy_id');
    }
}
