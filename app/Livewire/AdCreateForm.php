<?php

namespace App\Livewire;

use App\Models\ad;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AdCreateForm extends Component
{
    use WithFileUploads;

    public $title;
    public $brand;
    public $description;
    public $image;
    public $price;

    public $user_id;

    protected $rules = [

        'title' => 'required|min:3|max:100',
        'brand' => 'required|min:3|max:100',
        'description' => 'required|min:10|max:10000',
        'image' => 'required|image|mimes:webp,png,jpeg,jpg',

    ];

    protected $messages = [

        'required' => 'Il campo deve essere compilato',
        'min' => 'Il campo deve contenere minimo :min caratteri',
        'max' => 'Il campo deve contenere massimo :max caratteri',
        'image' => 'Il file deve essere un\'immagine',
        'mimes' => 'Le estensioni devono essere :values',


    ];

    public function store()
    {
        $this->validate();
        Auth::user()->ads()->create([
            'title' => $this->title,
            'brand' => $this->brand,
            'description' => $this->description,
            'image' => $this->image->store('public/ads'),
            'price' => $this->price,
            'user_id' => $this->user_id,
        ]);

        session()->flash('message', 'Hai inserito un annuncio correttamente');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.ad-create-form');
    }
}
