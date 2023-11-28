<?php

namespace App\Models;



use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad extends Model
{
    protected $fillable = ['title', 'brand', 'description', 'price', 'image', 'category_id'];

    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function setAccepted($value){
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public static function toBeRevisionedCount(){
        return Ad::where('is_accepted', null)->count();
    }

}
