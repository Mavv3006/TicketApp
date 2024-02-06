<?php

namespace App\Livewire;

use App\Models\AssignmentGroup;
use Livewire\Component;

class ShowSingleAssignmentGroup extends Component
{
    public string $name;

    public AssignmentGroup $assignmentGroup;

    public function mount($id): void
    {
        $this->assignmentGroup = AssignmentGroup::findOrFail($id);
        $this->name = $this->assignmentGroup->name;
    }

    public function updateName():void
    {
        $this->assignmentGroup->update(['name'=>$this->name]);
    }
}
