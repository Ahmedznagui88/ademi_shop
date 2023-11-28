<?php

namespace App\Http\Controllers;

use App\Models\ad;
use Illuminate\Http\Request;

class PublicController extends Controller
{
   public function homepage(){
     /*  $ads = ad::all(); */
      
      //!$ads = ad::orderby('created_at', 'desc')->take(4)->get();

      $ads = ad::where('is_accepted', true)->latest()->take(4)->get();

    return view('welcome', compact('ads'));
   }




}
