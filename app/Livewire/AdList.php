<?php

namespace App\Livewire;

use App\Models\ad;
use Livewire\Component;

class AdList extends Component
{
    public function render()
    {
        $ads = ad::all();
        return view('livewire.ad-list', compact('ads'));
    }
}
