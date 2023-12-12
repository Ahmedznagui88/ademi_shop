<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use App\Jobs\WaterMarker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AdCreateForm extends Component
{
    use WithFileUploads;

    public $title;
    public $brand;
    public $description;
    public $temporary_images;
    public $images = [];
    /* public $image; */
    public $price;
    public $category_id = [];
    public $user_id;
    public $ad;

    protected $rules = [

        'title' => 'required|min:3|max:100',
        'brand' => 'required|min:3|max:100',
        'images.*' => 'required|image|max:2000|mimes:webp,png,jpeg,jpg',
        'description' => 'required|min:10|max:10000',



    ];

    protected $messages = [

        'required' => 'Il campo deve essere compilato',
        'min' => 'Il campo deve contenere minimo :min caratteri',
        'max' => 'Il campo deve contenere massimo :max caratteri',
        'images.*.image' => 'Il file deve essere un\'immagine',
        'images.*.max' => 'L\'immagine deve avere massimo 2000kb',
        'mimes' => 'Le estensioni devono essere :values',
        'temporary_images.*.max' => 'L\'immagine dev\'essere massimo di 2mb',
        'temporary_images.*.image' => 'I file devono essere immagini',

    ];

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:2000',
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }
    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }


    public function store()
    {
        $this->validate();

        $this->ad = Auth::user()->ads()->create([
            'title' => $this->title,
            'brand' => $this->brand,
            'description' => $this->description,
            //'image' =>  $this->image->store('public/ads'),//
            'price' => $this->price,
            'category_id' => $this->category_id,
            'user_id' => $this->user_id,
        ]);

        if (count($this->images)) {

            foreach ($this->images as $image) {
                /* $this->ad->images()->create(['path'=>$image->store('images', 'public')]); */

                $newFileName = "ads/{$this->ad->id}";
                $newImage = $this->ad->images()->create(['path' => $image->store($newFileName, 'public')]);

                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 800, 450),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id),
                    new WaterMarker($newImage->id),
                ])->dispatch($newImage->id);
            }

            File::deleteDirectory(storage_path('app/livewire-tmp'));
        }
        session()->flash('message', 'Hai inserito un annuncio con successo, sarà pubblicato dopo la revisione');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.ad-create-form');
    }
}
