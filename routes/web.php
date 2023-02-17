<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventsController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/events', [EventsController::class, 'index'])->name('events');

Route::get('/events/create', [EventsController::class, 'create'])->name('createEvent');
Route::post('/events', [EventsController::class, 'store'])->name('storeEvent');

Route::get('/events/{slug}', [EventsController::class, 'show'])->name('showEvent');




