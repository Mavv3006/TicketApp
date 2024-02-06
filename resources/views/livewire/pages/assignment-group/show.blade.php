<?php

use App\Livewire\Forms\AssignmentGroupForm;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use Illuminate\Support\Facades\Log;

new #[Layout('layouts.app')] class extends Component {
    public AssignmentGroupForm $form;

    public function save(): void
    {
        Log::debug('validation');/*

        $this->validate();

        Log::debug('validation works', $this->form->all());*/

        $this->redirect(route('dashboard'), true);
    }
}; ?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold self-center text-xl text-gray-800 leading-tight">
            Assignment Group
        </h2>
    </x-slot>

    <form wire:submit="save">
        <x-main-section>
            <div class="grid md:grid-cols-2 gap-x-8 gap-y-4">
                <div class="grid grid-cols-3 gap-4">
                    <div class="flex">
                        <x-input-label class="w-full self-center text-right" for="assignmentGroupName">
                            Name
                        </x-input-label>
                    </div>
                    <div class="col-span-2">
                        <x-text-input class="w-full"
                                      wire:model="form.name"
                                      name="assignmentGroupName"
                                      id="assignmentGroupName"
                                      value="{{$assignmentGroup->name}}"/>
                    </div>
                    <x-input-error :messages="$errors->get('assignmentGroupName')" class="mt-2"/>
                </div>

                <div class="grid grid-cols-3 gap-4">
                    <div class="flex">
                        <x-input-label class="w-full self-center text-right" for="assignmentGroupManagedBy">
                            Managed By
                        </x-input-label>
                    </div>
                    <div class="col-span-2">
                        <x-text-input class="w-full"
                                      wire:model="form.managedByUsername"
                                      name="assignmentGroupManagedBy"
                                      id="assignmentGroupManagedBy"
                                      value="{{$assignmentGroup->managedBy->name}}"/>
                    </div>
                    <x-input-error :messages="$errors->get('assignmentGroupManagedBy')" class="mt-2"/>
                </div>

                <div class="grid grid-cols-3 gap-4 md:col-start-2">
                    <div class="flex">
                        <x-input-label class="w-full self-center text-right" for="assignmentGroupCreatedBy">
                            Created By
                        </x-input-label>
                    </div>
                    <div class="col-span-2">
                        <x-text-input disabled
                                      wire:model="form.createdByUsername"
                                      class="w-full"
                                      name="assignmentGroupCreatedBy"
                                      id="assignmentGroupCreatedBy"
                                      value="{{$assignmentGroup->createdBy->name}}"/>
                    </div>
                    <x-input-error :messages="$errors->get('assignmentGroupCreatedBy')" class="mt-2"/>
                </div>
            </div>
        </x-main-section>

        <x-main-section>
            <button type="submit">
                Speichern
            </button>
        </x-main-section>
    </form>
</x-app-layout>
