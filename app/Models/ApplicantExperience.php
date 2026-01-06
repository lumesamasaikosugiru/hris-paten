<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplicantExperience extends Model
{
    //
    protected $fillable =
        [
            'applicant_biodata_id',
            'job_title',
            'company_name',
            'description',
            'start_date',
            'end_date',
        ];

    public function applicantBiodata(): BelongsTo
    {
        return $this->belongsTo(ApplicantBiodata::class, 'applicant_biodata_id');
    }
}
