<?php

namespace App\Http\Livewire;

use App\Models\Continent;
use App\Models\Country;
use Livewire\Component;

class CascadingDropdown extends Component
{
    public $selectedContinent;
    public $selectedCountry;
    public $continents = [];
    public $countries = [];

    public function mount()
    {
        $this->continents = Continent::all();
    }

    public function render()
    {
        return view('livewire.cascading-dropdown');
    }

    public function changeContinent()
    {
        sleep(fake()->numberBetween(1, 3));
        if ($this->selectedContinent !== '-1') {
            $this->countries = Country::where('continent_id', $this->selectedContinent)->get();
        }
    }
}
