<?php

namespace App\Livewire;



use App\Models\Image;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;

use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdEdit extends Component
{
    use WithFileUploads;
    public $ad;
    public $title;
    public $brand;
    public $description;
    public $temporary_images;
    public $images = [];
    public $image;
    public $price;
    public $category_id = [];
    public $old_images;
   
    
    
   
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
    public function deleteOldImage($key){

        if ($this->old_images->has($key)) {
           $this->old_images->get($key)->delete();
            $this->old_images->forget($key);
        }
     
    
        session()->flash('message', 'Immagine eliminata con successo');
    }
    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }
  
    public function update() {

        $this->ad->update([
            'title' => $this->title,
            'brand' => $this->brand,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category_id,

        ]);
        
        
        if (count($this->images)) {
           
            foreach ($this->images as $image) {

                $newFileName = "ads/{$this->ad->id}";
                $newImage = $this->ad->images()->create(['path' => $image->store($newFileName, 'public')]);
                dispatch(new ResizeImage($newImage->path, 800, 450));
                /*dispatch(new GoogleVisionSafeSearch($newImage->id));
                dispatch(new GoogleVisionLabelImage($newImage->id));*/
                
            }
            
       
            File::deleteDirectory(storage_path('app/livewire-tmp'));
        }
        $this->reset('images');
        session()->flash('message', 'Annuncio modificato con successo');
    }
    public function mount() {
        $this->title = $this->ad->title;
        $this->brand = $this->ad->brand;
        $this->description = $this->ad->description;
        $this->price = $this->ad->price;
        $this->category_id[] = $this->ad->category_id;
        $this->old_images = Image::where('ad_id', $this->ad->id)->get();
        $this->temporary_images = $this->old_images;
    
    }
    
    public function render()
    {
    
        $categories = Category::all();
        return view('livewire.ad-edit', compact('categories'));
    }
} 
