<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;

    public function increment()
    {
        if ($this->count === 10) return;
        $this->count += 1;
    }

    public function decrement()
    {
        if ($this->count === 0) return;
        $this->count -= 1;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
