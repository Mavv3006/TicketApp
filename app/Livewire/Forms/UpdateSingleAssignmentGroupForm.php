<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class UpdateSingleAssignmentGroupForm extends Form
{
    #[Validate(['string', 'required'])]
    public string $name;
    #[Validate(['string', 'required'])]
    public string $managedByUsername;
}
