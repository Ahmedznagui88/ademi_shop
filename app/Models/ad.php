<?php

namespace App\Models;



use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'brand', 'description', 'price', 'image'];
 
    public function user(){
        return $this->belongsTo(user::class);
    }

    public function Category(){
        return $this->belongsTo(Category::class);
    }

}
