<?php

use App\Http\Controllers\{
    EventsController
};

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

Route::get('/',[ EventsController::class, 'search']);

Route::get('/events/list', [EventsController::class,'index']);
Route::get('/events/list/{id}', [EventsController::class, 'show']);
Route::get('/events/create', [EventsController::class, 'create'])->middleware('auth');
Route::get('/events/about', [EventsController::class, 'about']);
Route::get('/events/contact', [EventsController::class, 'contact']);

Route::post('/events',[EventsController::class, 'store']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
