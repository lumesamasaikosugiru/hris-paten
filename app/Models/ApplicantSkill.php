<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApplicantSkill extends Model
{
    //
    protected $fillable =
        [
            'applicant_biodata_id',
            'skill_id',
        ];

    public function applicantBiodata(): BelongsTo
    {
        return $this->belongsTo(ApplicantBiodata::class, 'applicant_biodata_id');
    }

    public function skill(): BelongsTo
    {
        return $this->belongsTo(Skill::class, 'skill_id');
    }
}
