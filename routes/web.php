<?php

use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ArtisteController;
use App\Http\Controllers\ContactController;
use Illuminate\Auth\Middleware\Authenticate;

Route::get('/artistes', function () {
    return view('artistes');
})->name('artistes');

Route::get('/participer', function () {
    return view('participer');
})->name('participer');


Auth::routes([
    'login' => true,
    'register' => true,
    'reset' => true, // Réinitialisation de mot de passe
    'verify' => false, // Vérification d'email
]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('image-upload', [ImageController::class, 'index']);
Route::post('image-upload', [ImageController::class, 'store'])->name('image.store');

Route::group(['prefix' => 'dashboard', 'middleware' => Authenticate::class], function(): void {
    Route::get('index', [ArtisteController::class, 'index'])->name('dashboard.index');
    Route::resource('artistes', ArtisteController::class);
    Route::resource('images', ImageController::class);
});

Route::redirect('/dashboard', '/dashboard/artistes');
