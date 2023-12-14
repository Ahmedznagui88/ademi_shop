<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Predis\Command\Redis\TimeSeries\TSADD;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class ImageProfileForm extends Component
{
 
    use WithFileUploads;
   

    public $province;
    public $city;
    public $age;
    public $image;
    
   

    protected $rules = [
       
        'image' => 'required|image|max:2000|mimes:webp,png,jpeg,jpg',
        'province' => 'required|min:3|max:50',
        'city' => 'required|min:3|max:20',
        'age' => 'required|integer',
   
    ];
    protected $messages = [

        'required' => 'Il campo deve essere compilato',
        'mimes' => 'Le estensioni devono essere :values',
        'image' => 'Il file deve essere un\'immagine',
        'min' => 'Il campo deve essere minimo di :values',
        'max' => 'Il campo deve essere minimo di :values',
    ];
    public function store() {

        $this->validate();
       
        Auth::User()->update([
            
            'province' => $this->province,
            'city' => $this->city,
            'age' => $this->age,
            'image' => $this->image->store('public/users'),
      
        ]);
        session()->flash('message', 'Immagine caricata con successo');

    }
    public function render()
    {
        return view('livewire.image-profile-form');
    }
}
