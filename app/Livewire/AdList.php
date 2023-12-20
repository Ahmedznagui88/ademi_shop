<?php

namespace App\Livewire;

use App\Models\ad;
use App\Models\Image;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdList extends Component
{
    
/*     public function destroy(ad $ad) {
       foreach($ad->images() as $image) {
        Storage::delete($image);
        $image->delete();
       }
       $ad->delete(); 
       session()->flash('message', 'Annuncio eliminato con successo');
       $this->render();
    } */
    public function render()
    {
        $ads = ad::where('user_id', auth()->user()->id)->get();
        return view('livewire.ad-list' , compact('ads'));
    }
}
