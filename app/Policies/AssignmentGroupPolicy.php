<?php

namespace App\Policies;

use App\Models\AssignmentGroup;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AssignmentGroupPolicy
{
    use HandlesAuthorization;

    public function viewAny(): bool
    {
        return true;
    }

    public function view(): bool
    {
        return true;
    }

    public function create(): bool
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

    public function forceDelete(): bool
    {
        return false;
    }
}
