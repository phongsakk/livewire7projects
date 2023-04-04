<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Calculator extends Component
{
    public int $number1 = 0;
    public int $number2 = 0;
    public string $action = '+';
    public float $result = 0;
    public bool $disabled = false;

    public function render(): View
    {
        return view('livewire.calculator');
    }

    public function calculate()
    {
        $num1 = (float)$this->number1;
        $num2 = (float)$this->number2;
        switch ($this->action) {
            case '-':
                $this->result = $num1 - $num2;
                break;
            case '+':
                $this->result = $num1 + $num2;
                break;
            case '*':
                $this->result = $num1 * $num2;
                break;
            case '/':
                $this->result = $num1 / $num2;
                break;
            case '%':
                $this->result = $num1 / 100 * $num2;
                break;
        }
    }

    public function updated($property)
    {
        $this->disabled = ($this->number1 == '' || $this->number2 == '');
    }
}
