<?php

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

Auth::routes();
// Auth::routes(["register" => false]); || per disattivare la registrazione
// Auth::routes(["register" => true]);
// Auth::routes(["verify" => false]); 
// Auth::routes(["verify" => true]); || per attivare la verifica email al momento della registrazione

// creazione gruppo di rotte protette da autenticazione ADMIN middleware('auth')
Route::middleware('auth') // autenticazione
    ->namespace('Admin')  // controller
    ->name('admin.')      // nome rotte
    ->prefix('admin')     // url rotte
    ->group(function () {

        Route::get('/', 'HomeController@index')->name('home');
        Route::resource('posts', 'PostController');
});


// rotte pubbliche
// Route::get('/', 'HomeController@index')->name('home');

// rotta di fallback - DA METTERE SEMPRE PER ULTIMA
Route::get('{any?}', 'HomeController@index')->where('any', '.*')->name('home');
// sarebbe
// Route::get('{any?}', function() {
//     return view('guest.home');