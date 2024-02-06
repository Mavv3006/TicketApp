<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class AssignmentGroupForm extends Form
{
    #[Validate('required|string')]
    public string $name = '';

    #[Validate(['required', 'exists:users,name'])]
    public string $managedByUsername = '';

    #[Validate(['required', 'exists:users,name'])]
    public string $createdByUsername = '';
}
