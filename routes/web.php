<?php

use App\Http\Controllers\ArtisteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Models\Image;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'login' => true,
    'register' => true,
    'reset' => true, // Réinitialisation de mot de passe
    'verify' => false, // Vérification d'email
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('image-upload', [ImageController::class, 'index']);
Route::post('image-upload', [ImageController::class, 'store'])->name('image.store');
Route::middleware(['auth'])->group(function () {
    Route::resource('artistes', ArtisteController::class);
    Route::resource('images', ImageController::class);
});
