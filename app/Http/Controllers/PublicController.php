<?php

namespace App\Http\Controllers;

use App\Models\ad;
use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function homepage(){
      $ads = ad::all();
      $ads = ad::orderby('created_at', 'desc')->take(4)->get();

    return view('welcome', compact('ads'));
   }
}
