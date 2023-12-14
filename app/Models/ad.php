<?php

namespace App\Models;



use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad extends Model
{
    protected $fillable = ['title', 'brand', 'description', 'price', 'image', 'category_id', 'is_accepted'];

    use HasFactory, Searchable;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setAccepted($value)
    {
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public static function toBeRevisionedCount()
    {
        return Ad::where('is_accepted', null)->count();
    }

    public function toSearchableArray()
    {

        $category = $this->category;
        $array = [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $category,
        ];
        return $array; 
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
}
