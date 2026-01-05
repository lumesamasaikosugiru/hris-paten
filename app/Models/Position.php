<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Position extends Model
{
    //
    protected $fillable =
        [
            'name',
            'level',
            'description',
        ];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'position_id');
    }

    public function positionAssigments(): HasMany
    {
        return $this->hasMany(PositionAssignment::class, 'position_id');
    }
}
