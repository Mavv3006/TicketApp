<div>
    <h1>{{ $count?? "t" }}</h1>

    <button wire:click="increment">+</button>

    <button wire:click="decrement">-</button>

    <div>{{$title}}</div>
</div>
