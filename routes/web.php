<?php

use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class,  'index'])->name('landing');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('galeri');
Route::get('/staff', [HomeController::class, 'staff'])->name('staff');
