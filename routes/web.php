<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProducerController;
use App\Http\Controllers\CompressorController;
use App\Http\Controllers\Air_extractorController;
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
    return view('home');
});
Route::resource('producer', ProducerController::class);
Route::resource('compressor', CompressorController::class);
Route::resource('air_extractor', Air_extractorController::class);
