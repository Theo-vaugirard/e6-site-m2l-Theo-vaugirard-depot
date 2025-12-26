<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OuvrageController;


Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/evenements', [MainController::class, 'evenements'])->name('evenements');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/connexion', [LoginController::class, 'connexion'])->name('connexion');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/deconnexion', [LoginController::class, 'deconnexion'])->name('deconnexion');

//à remplacer par une route ressource pour les ouvrages
Route::resource('/ouvrages', OuvrageController::class)->only(['index', 'show'])->middleware('auth');

//Route::resource('/details_ouvrages', OuvrageController::class)->only(['show'])->middleware('auth');

/*Route::get('/ouvrages/{type_ouvrage}', [OuvrageController::class, 'index'])
     ->middleware('auth')
     ->name('ouvrages.index');*/

route::get('/blog', function(){
     return 'bonjour';
});
