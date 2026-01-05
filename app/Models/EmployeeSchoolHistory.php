<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use function PHPUnit\Framework\returnArgument;

class EmployeeSchoolHistory extends Model
{
    //
    protected $fillable =
        [
            'employee_id',
            'school_id',
            'start_date',
            'end_date',
            'is_active',
            'contract_number',
            'description',
        ];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class, 'school_id');
    }

}
