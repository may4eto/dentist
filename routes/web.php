<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;

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
    return view('index');
})
-> name('home');

Route::get('/team', [TeamController::class, 'showTeam'])
-> name('team');

Route::get('/servizi', function () {
    return view('servizi');
})
-> name('servizi');

Route::get('/contatti', function () {
    return view('contatti');
})
-> name('contatti');

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
