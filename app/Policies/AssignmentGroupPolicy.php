<?php

namespace App\Policies;

use App\Models\AssignmentGroup;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AssignmentGroupPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, AssignmentGroup $assignmentGroup): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, AssignmentGroup $assignmentGroup): bool
    {
        return $user->id == $assignmentGroup->managedBy->id;
    }

    public function delete(User $user, AssignmentGroup $assignmentGroup): bool
    {
        return $user->id == $assignmentGroup->managedBy->id;
    }

    public function restore(User $user, AssignmentGroup $assignmentGroup): bool
    {
        return $user->id == $assignmentGroup->managedBy->id;
    }

    public function forceDelete(User $user, AssignmentGroup $assignmentGroup): bool
    {
        return false;
    }
}
