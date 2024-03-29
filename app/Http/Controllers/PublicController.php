<?php

namespace App\Http\Controllers;

use App\Models\ad;
use Illuminate\Http\Request;

class PublicController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth')->except('homepage');
  }
  public function homepage()
  {
    /*  $ads = ad::all(); */

    //!$ads = ad::orderby('created_at', 'desc')->take(4)->get();

    $ads = ad::where('is_accepted', true)->latest()->take(4)->get();

    return view('welcome', compact('ads'));
  }

  public function searchAds(Request $request)
  {
    $ads = ad::search($request->searched)->where('is_accepted', true)->paginate(10);
    return view('ad.index', compact('ads'));
  }

  public function setLanguage($lang){
    session()->put('local', $lang);
    return redirect()->back();
  }

  public function profile() {
    $ads = ad::where('is_accepted', true)->latest()->get();
    return view('auth.profile', compact('ads'));
  }
  public function create() {
    return view('auth.ProfileImagecreate');
  }
}
