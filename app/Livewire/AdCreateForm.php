<?php

namespace App\Livewire;

use App\Models\ad;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AdCreateForm extends Component
{
use WithFileUploads;

    public $title;
    public $brand;
    public $description;
    public $image;
    public $price;

public function store () {

    ad::create([
       'title' => $this->title,
       'brand' => $this->brand,
       'description' => $this->description,
       'image' => $this->image->store('public/ads'),
       'price' => $this->price,
    ]);

    session()->flash('message', 'Hai inserito un annuncio correttamente');
    
    $this->reset();

}

    public function render()
    {
        return view('livewire.ad-create-form');
    }


}
