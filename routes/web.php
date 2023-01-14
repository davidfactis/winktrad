<?php

use App\Http\Controllers\LocalizationController;
use App\Http\Livewire\DemandeComponent;
use App\Http\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',HomeComponent::class);
Route::post('/', HomeComponent::class);

Route::resource('/', ContactController::class)->only(['store']);

//Demande
Route::get('/demande', DemandeComponent::class)->name('demande');
Route::post('/demande', DemandeComponent::class)->name('demande');
Route::resource('demandes', DemandeController::class)->only(['store']);

//Localization Route

Route::get("locale/{lang}",[LocalizationController::class,'setLang']);
