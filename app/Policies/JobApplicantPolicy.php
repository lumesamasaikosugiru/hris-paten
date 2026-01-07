<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\JobApplicant;
use Illuminate\Auth\Access\HandlesAuthorization;

class JobApplicantPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:JobApplicant');
    }

    public function view(AuthUser $authUser, JobApplicant $jobApplicant): bool
    {
        return $authUser->can('View:JobApplicant');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:JobApplicant');
    }

    public function update(AuthUser $authUser, JobApplicant $jobApplicant): bool
    {
        return $authUser->can('Update:JobApplicant');
    }

    public function delete(AuthUser $authUser, JobApplicant $jobApplicant): bool
    {
        return $authUser->can('Delete:JobApplicant');
    }

    public function restore(AuthUser $authUser, JobApplicant $jobApplicant): bool
    {
        return $authUser->can('Restore:JobApplicant');
    }

    public function forceDelete(AuthUser $authUser, JobApplicant $jobApplicant): bool
    {
        return $authUser->can('ForceDelete:JobApplicant');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:JobApplicant');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:JobApplicant');
    }

    public function replicate(AuthUser $authUser, JobApplicant $jobApplicant): bool
    {
        return $authUser->can('Replicate:JobApplicant');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:JobApplicant');
    }

}