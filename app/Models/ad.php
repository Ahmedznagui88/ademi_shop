<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ad extends Model
{
    use HasFactory;

protected $fillable = [

'title',
'brand',
'description',
'price',
'image',

];

public function user(){
    return $this->belongsTo(User::class);
}

}
