<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attendance extends Model
{
    //
    protected $fillable =
        [
            'employee_id',
            'school_id',
            'date',
            'check_in_time',
            'check_out_time',
            'check_in_location',
            'check_out_location',
            'is_late',
            'minute_late',
            'work_hours',
            'status',
        ];

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class, 'school_id');
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
