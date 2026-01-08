<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ApplicantBiodata extends Model
{
    //
    protected $fillable =
        [
            'ktp',
            'fullname',
            'gender',
            'birthday',
            'address_street',
            'address_district',
            'address_city',
            'marital_status',
            'ethnicity',
            'phone',
        ];

    public function applicantEducations(): HasMany
    {
        return $this->hasMany(ApplicantEducation::class, 'applicant_biodata_id');
    }

    public function applicantExperiences(): HasMany
    {
        return $this->hasMany(ApplicantExperience::class, 'applicant_biodata_id');
    }

    public function applicantSkills(): HasMany
    {
        return $this->hasMany(ApplicantSkill::class, 'applicant_biodata_id');
    }
    public function jobApplicants(): HasMany
    {
        return $this->hasMany(JobApplicant::class, 'applicant_biodata_id');
    }

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'applicant_biodata_id');
    }

    public function jobVacancies(): BelongsToMany
    {
        return $this->belongsToMany(
            JobVacancy::class,
            'job_applicants',
            'applicant_biodata_id',
            'job_vacancy_id'
        );
    }

    //hasONE

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function employee(): HasOne
    {
        return $this->hasOne(Employee::class);
    }
}
