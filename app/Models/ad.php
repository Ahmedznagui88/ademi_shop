<<<<<<< HEAD
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
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
=======
>>>>>>> d6f751c48a343e9faa0f768ec2214f53963a78c6
