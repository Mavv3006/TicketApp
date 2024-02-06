<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;
    public $title = 'bla';

    public function increment()
    {
        $this->count++;
        $this->title = "hihi";
    }

    public function decrement()
    {
        $this->title = "dada";
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
