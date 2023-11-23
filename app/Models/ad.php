<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad extends Model
{
    protected $fillable = ['title', 'brand', 'description', 'price', 'image','category_id'];

    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
