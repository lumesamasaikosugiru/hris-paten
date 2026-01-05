<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use PhpParser\Node\Expr\FuncCall;
use Symfony\Component\CssSelector\Node\FunctionNode;

class Employee extends Model
{
    //
    protected $fillable =
        [
            'user_id',
            'school_id',
            'department_id',
            'position_id',
            'applicant_id',
            'hire_date',
            'status',
            'photo_path',
        ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class, 'school_id');
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    public function applicantBio(): BelongsTo
    {
        return $this->belongsTo(ApplicantBiodata::class, 'applicant_biodata_id');
    }

    //orm has many ----------->>>>>>>>>>>>>>>>>>>>>>>>>>>>

    public function attendances(): HasMany
    {
        return $this->hasMany(Attendance::class, 'employee_id');
    }

    public function leaveBalances(): HasMany
    {
        return $this->hasMany(LeaveBalance::class, 'employee_id');
    }

    public function leaveRequests(): HasMany
    {
        return $this->hasMany(LeaveRequest::class, 'employee_id');
    }

    public function employeeStatusHistories(): HasMany
    {
        return $this->hasMany(EmployeeStatusHistory::class, 'employee_id');
    }

    public function employeeSchoolHistories(): HasMany
    {
        return $this->hasMany(EmployeeSchoolHistory::class, 'employee_id');
    }

    public function positionAssignments(): HasMany
    {
        return $this->hasMany(PositionAssignment::class, 'employee_id');
    }
}
