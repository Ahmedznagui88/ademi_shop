<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdController;
use App\Http\Controllers\PublicController;


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
//rotte ad//
Route::get('/ad/create', [AdController::class, 'create'])->name('ad.create');
Route::get('/ad/index', [AdController::class, 'index'])->name('ad.index');
Route::get('/ad/show/{ad}', [AdController::class, 'show'])->name('ad.show');



