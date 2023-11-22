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

    protected $rules = [

        'title' => 'required|min:3|max:100',
        'brand' => 'required|min:3|max:100',
        'description' => 'required|min:10|max:10000',
        

    ];

    protected $messages = [

        'required' => 'Il campo deve essere compilato',
        'min' => 'Il campo deve contenere minimo :min caratteri',
        'max' => 'Il campo deve contenere massimo :max caratteri',
       
        'mimes' => 'Le estensioni devono essere :values',


    ];



    public function store()
    {  
         $this->validate();

      if($this->image){
        $image = $this->image->store('public/ads');
      } else {
        $image = 'public/media/default-img.jpg';
      }
        ad::create([
            'title' => $this->title,
            'brand' => $this->brand,
            'description' => $this->description,
            'image' => $image,
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
