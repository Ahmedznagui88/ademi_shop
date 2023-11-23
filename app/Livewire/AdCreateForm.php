<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\Category;
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
    public $category_id;
    public $user_id;

    protected $rules = [

        'title' => 'required|min:3|max:100',
        'brand' => 'required|min:3|max:100',
        'image' => 'required|image|mimes:webp,png,jpeg,jpg', 
        'description' => 'required|min:10|max:10000',



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
            'image' =>  $this->image->store('public/ads'),
            'price' => $this->price,
            'category_id' => $this->category_id,
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
