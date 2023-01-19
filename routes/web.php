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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/admin/artisan/migrate', function () {
//     Artisan::call('migrate:refresh');
// });

Route::get('/register', 'App\Http\Controllers\RegisterController@store');

Route::get('/unsubscribe/{id}', 'App\Http\Controllers\Subscribe@update');

//Route::get('email', 'App\Http\Controllers\EmailController@index');