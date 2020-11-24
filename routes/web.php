<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;




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

Route::get('/index', [FrontController::class, 'showIndex'])
-> name('home');

Route::get('/team', [TeamController::class, 'showTeam'])
-> name('team');

Route::get('/servizi', [ServicesController::class, 'showServices'])
-> name('servizi');

Route::get('/contatti/{name?}', [ContactController::class, 'contactUs'])
-> name('contatti');

Route::post('/contact_save', [ContactController::class, 'contactSave'])
-> name('contact_save');

Route::get('/grazie', [ContactController::class, 'thankYou'])
-> name('grazie');


/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
