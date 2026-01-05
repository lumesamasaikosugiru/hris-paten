<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LeaveType extends Model
{
    //
    protected $fillable =
        [
            'name',
            'default_days',
            'is_quota_based',
            'gender_restriction',
            'repeat_cycle',
            'is_active',
        ];
    public function leaveBalances(): HasMany
    {
        return $this->hasMany(LeaveBalance::class, 'leave_type_id');
    }

    public function leaveRequest(): HasMany
    {
        return $this->hasMany(LeaveRequest::class, 'leave_type_id');
    }

}
