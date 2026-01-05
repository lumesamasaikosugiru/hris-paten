<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplicantEducation extends Model
{
    //
    protected $fillable =
        [
            'applicant_biodata_id',
            'eduction_level',
            'program_study',
            'graduation_year',
            'university_name',
        ];

    public function applicantBiodata(): BelongsTo
    {
        return $this->belongsTo(ApplicantBiodata::class, 'applicant_biodata_id');
    }
}
