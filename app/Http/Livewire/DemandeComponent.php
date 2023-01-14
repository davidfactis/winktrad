<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DemandeComponent extends Component
{
    public function render()
    {
        return view('livewire.demande-component')->layout('layouts.base');
    }
}
