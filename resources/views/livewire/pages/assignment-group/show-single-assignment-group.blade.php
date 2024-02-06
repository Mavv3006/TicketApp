<div>
    <x-slot name="header">
        <h2 class="font-semibold self-center text-xl text-gray-800 leading-tight">
            Assignment Group
        </h2>
    </x-slot>

    <form wire:submit="test123">
        <x-main-section>
            <div class="grid md:grid-cols-2 gap-x-8 gap-y-4">
                <div class="grid grid-cols-3 gap-4">
                    <div class="flex">
                        <x-input-label class="w-full self-center text-right" for="group-name">
                            Name
                        </x-input-label>
                    </div>
                    <div class="col-span-2">
                        <x-text-input class="w-full" wire:model="name" name="group-name" id="group-name"
                                      value="{{$assignmentGroup->name}}"/>
                    </div>

                    {{--                    <x-input-error :messages="$errors->get('name')" class="mt-2"/>--}}
                </div>

                <div class="grid grid-cols-3 gap-4">
                    <div class="flex">
                        <x-input-label class="w-full self-center text-right" for="managed-by">
                            Managed By
                        </x-input-label>
                    </div>
                    <div class="col-span-2">
                        <x-text-input class="w-full"
                                      wire:model="form.managedByUsername"
                                      name="managed-by"
                                      id="managed-by"/>
                    </div>
                    {{--                    <x-input-error :messages="$errors->get('managedByUsername')" class="mt-2"/>--}}
                </div>

                <div class="grid grid-cols-3 gap-4 md:col-start-2">
                    <div class="flex">
                        <x-input-label class="w-full self-center text-right" for="created-by">
                            Created By
                        </x-input-label>
                    </div>
                    <div class="col-span-2">
                        <x-text-input disabled
                                      value="{{$createdBy->name}}"
                                      class="w-full"
                                      name="created-by"
                                      id="created-by"/>
                    </div>
                </div>
            </div>
        </x-main-section>

        <x-main-section>
            <x-primary-button>
                Speichern
            </x-primary-button>
        </x-main-section>

        {{--        <x-main-section>--}}
        {{--            <h2>Errors</h2>--}}

        {{--            <div>--}}
        {{--                {{$errors}}--}}
        {{--            </div>--}}
        {{--        </x-main-section>--}}
    </form>
</div>
