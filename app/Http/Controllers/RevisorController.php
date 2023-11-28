<?php

namespace App\Http\Controllers;

use App\Models\ad;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index(){
        $ad_to_check = ad::where('is_accepted', null)->first();
        return view('revisor.index', compact('ad_to_check'));
    }

    public function acceptAd(ad $ad){
        $ad->setAccepted(true);
        return redirect()->back()->with('message', 'Complimenti, hai accettato l\'annuncio');
    }

    public function rejectAd (ad $ad){
        $ad->setAccepted(false);
        return redirect()->back()->with('message', 'Complimenti, hai rifiutato l\'annuncio');
    }

    
}
