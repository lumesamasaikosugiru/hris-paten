<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Symfony\Component\CssSelector\Node\FunctionNode;

class School extends Model
{
    //
    protected $fillable = [
        'name',
        'level',
        'address',
        'phone',
        'email',
    ];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'school_id');
    }

    public function departments(): HasMany
    {
        return $this->hasMany(Department::class, 'school_id');
    }

    public function positionAssignments(): HasMany
    {
        return $this->hasMany(PositionAssignment::class, 'school_id');
    }

    public function employeeSchoolHistories(): HasMany
    {
        return $this->hasMany(EmployeeSchoolHistory::class, 'school_id');
    }

    public function attendances(): HasMany
    {
        return $this->hasMany(Attendance::class, 'school_id');
    }

    public function leaveRequests(): HasMany
    {
        return $this->hasMany(LeaveRequest::class, 'school_id');
    }
}
