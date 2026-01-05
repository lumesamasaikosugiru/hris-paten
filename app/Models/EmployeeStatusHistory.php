<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmployeeStatusHistory extends Model
{
    //
    protected $fillable =
        [
            'employee_id',
            'status_type',
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
}
