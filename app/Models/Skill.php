<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Skill extends Model
{
    //

    protected $fillable =
        [
            'name',
            'type',
        ];

    public function applicantSkills(): HasMany
    {
        return $this->hasMany(ApplicantSkill::class, 'skill_id');
    }
}
