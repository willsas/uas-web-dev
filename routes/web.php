<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\MaterialController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/material', [MaterialController::class, 'index']);
Route::get('/material/add', [MaterialController::class, 'add']);
Route::post('/material/add', [MaterialController::class, 'add']);

Route::get('/event', [EventController::class, 'index']);
Route::get('/event/add', [EventController::class, 'add']);
Route::post('/event/add', [EventController::class, 'add']);
