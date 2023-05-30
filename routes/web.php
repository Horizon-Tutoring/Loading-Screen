<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DiscordController;

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

Route::post('/admin/post/discord/live', [DiscordController::class, 'postMessage']);

Route::get('/', [PageController::class, 'index']);

// Route::get('/admin/artisan/migrate', function () {
//     Artisan::call('migrate:refresh');
// });

Route::get('/0766377760', 'App\Http\Controllers\RegisterController@PosterView');

Route::get('/register', 'App\Http\Controllers\RegisterController@store');

Route::get('/unsubscribe/{id}', 'App\Http\Controllers\Subscribe@update');

//Route::get('email', 'App\Http\Controllers\EmailController@index');1