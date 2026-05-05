<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OuvrageController;
use App\Http\Controllers\RegisterController;

// Pages publiques
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/evenements', [MainController::class, 'evenements'])->name('evenements');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');


// AUTH (invités uniquement)
Route::middleware('guest')->group(function () {

    // inscription
    Route::get('/register', [RegisterController::class, 'showForm'])->name('register.form');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

    // connexion (AFFICHAGE + LOGIN)
    Route::get('/connexion', [LoginController::class, 'connexion'])->name('connexion');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
});

// Déconnexion (utilisateur connecté)
Route::post('/logout', [LoginController::class, 'deconnexion'])
    ->middleware('auth')
    ->name('logout');

// Pages protégées
Route::resource('/ouvrages', OuvrageController::class)
    ->only(['index', 'show'])
    ->middleware('auth');

// Test
Route::get('/blog', function(){
    return 'bonjour';
});
