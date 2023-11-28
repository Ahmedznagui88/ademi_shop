<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use App\Models\ad;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use PharIo\Manifest\Email;

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

    public function becomeRevisor(){
       /* Mail::to('ademi@gmail.com')->send(new BecomeRevisor(Auth::user())); */
        Mail::to(Auth::user())->send(new BecomeRevisor(Auth::user()));
    
        return redirect()->back()->with('message', 'Compliemnte, hai richiesto di diventare revisore');
    }

    public function makeRevisor(User $user){
        Artisan::call('app:makeUserRevisor', ["email"=>$user->email]);
        return redirect('/')->with('message', 'Complimenti, sei diventato uno di noi!');

    }

    
}
