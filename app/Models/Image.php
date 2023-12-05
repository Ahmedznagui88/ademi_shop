<?php

namespace App\Models;

use App\Models\ad;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

protected $fillable = ['path'];

public function ad () {

return $this->belongTo(ad::class);

}


}
