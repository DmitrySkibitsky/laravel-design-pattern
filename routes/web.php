<?php

use App\Http\Controllers\PatternsController;
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

Route::get('/property_container', [PatternsController::class, 'propertyContainer']);
Route::get('/delegation', [PatternsController::class, 'delegation']);
Route::get('/event_channel', [PatternsController::class, 'eventChannel']);
Route::get('/abstract_factory', [PatternsController::class, 'abstractFactory']);
Route::get('/singleton', [PatternsController::class, 'singleton']);
