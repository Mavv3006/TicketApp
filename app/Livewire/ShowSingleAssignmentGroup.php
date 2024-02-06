<?php

namespace App\Livewire;

use App\Livewire\Forms\UpdateSingleAssignmentGroupForm;
use App\Models\AssignmentGroup;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ShowSingleAssignmentGroup extends Component
{

    public User $managedBy;
    public User $createdBy;
    public AssignmentGroup $assignmentGroup;

    public UpdateSingleAssignmentGroupForm $form;

    public function mount(AssignmentGroup $assignmentGroup): void
    {
        $this->assignmentGroup = $assignmentGroup;
        $this->managedBy = $this->assignmentGroup->managedBy;
        $this->createdBy = $this->assignmentGroup->createdBy;
        $this->prefillForm();
    }

    public function test123(): void
    {
        $validatedData = $this->form->validate();

        if ($this->form->name != $this->assignmentGroup->name) {
            $this->assignmentGroup->update(['name' => $validatedData['name']]);
        }
    }

    private function prefillForm(): void
    {
        $this->form->name = $this->assignmentGroup->name;
        $this->form->createdByUsername = $this->assignmentGroup->createdBy->name;
        $this->form->managedByUsername = $this->assignmentGroup->managedBy->name;
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.pages.assignment-group.show-single-assignment-group');
    }
}
