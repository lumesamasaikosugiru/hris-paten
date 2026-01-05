<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    //
    protected $fillable =
        [
            'school_id',
            'name',
            'description',
        ];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'department_id');
    }

    public function position_assignments(): HasMany
    {
        return $this->hasMany(PositionAssignment::class, 'department_id');
    }


    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class, 'school_id');
    }
}
