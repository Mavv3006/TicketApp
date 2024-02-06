<div>
    <div class="mb-4">
        <x-input-label for="name">Name</x-input-label>
    <x-text-input wire:model="name" id="name" name="name"/>
    </div>
    <button wire:click="updateName">Speichern</button>
</div>
