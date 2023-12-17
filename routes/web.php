<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Rotte Public//
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/profile', [PublicController::class, 'profile'])->name('profile');
Route::get('/profile/create', [PublicController::class, 'create'])->name('profileCreate');

//rotte ad//
Route::get('/ad/create', [AdController::class, 'create'])->name('ad.create');
Route::get('/ad/index', [AdController::class, 'index'])->name('ad.index');
Route::get('/ad/show/{ad}', [AdController::class, 'show'])->name('ad.show');
Route::get('/ad/index{category}', [AdController::class, 'indexCategory'])->name('ad.indexCategory');
Route::get('/ad/edit{ad}', [AdController::class, 'edit'])->name('ad.edit');

//*Home Revisor
Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');

//*Accetta annuncio
Route::patch('/accetta/annuncio/{ad}', [RevisorController::class, 'acceptAd'])->middleware('isRevisor')->name('revisor.accept.ad');

//*Rifiuta annuncio
Route::patch('/rifiuta/annuncio/{ad}', [RevisorController::class, 'rejectAd'])->middleware('isRevisor')->name('revisor.reject.ad');

//*Diventa Revisore Route
Route::get('/become/revisor', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

//*Pagina Richiesta revisore Route
Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

//*Ricerca per annuncio

Route::get('/search/ads', [PublicController::class, 'searchAds'])->name('ads.search');

//*Rotta Lingue

Route::post('language/{lang}', [PublicController::class, 'setLanguage'])->name('set_language_local');

