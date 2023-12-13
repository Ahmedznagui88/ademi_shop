<?php

namespace App\Livewire;

use App\Models\ad;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class AdList extends Component
{
    public function destroy(ad $ad) {
       foreach($ad->images() as $image) {
        Storage::delete($image);
        $image->delete();
       }
       $ad->delete();
       
       session()->flash('message', 'Annuncio eliminato con successo');
    }
    public function render()
    {
        $ads = ad::all();
        return view('livewire.ad-list', compact('ads'));
    }
}
