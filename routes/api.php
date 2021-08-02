<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// indirizzo http://127.0.0.1:8000/api/test
Route::get('/test', function() {
    return response()->json(
        [
            'firstname' => 'Bruce',
            'lastname' => 'Zina',
            'age' => 5
        ]
    );
});

// postaman
Route::post('/rotta-post', function() {
    $studenti = [
        [
            'firstname' => 'Stefano',
            'lastname' => 'Zina'
        ],
        [
            'firstname' => 'Scar',
            'lastname' => 'Von Dutch'
        ]
    ];

        return response()->json($studenti);
});

Route::namespace('Api')
    ->group(function() {

        Route::get('posts', 'PostController@index');
        Route::get('posts/{slug}', 'PostController@show');

    });