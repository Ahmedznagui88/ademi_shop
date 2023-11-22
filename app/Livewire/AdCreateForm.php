<?php

namespace App\Livewire;

use App\Models\ad;
use Livewire\Component;


class AdCreateForm extends Component
{

    public $title;
    public $brand;
    public $description;
    public $price;

public function store () {

    ad::create([
       'title' => $this->title,
       'brand' => $this->brand,
       'description' => $this->description,
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
