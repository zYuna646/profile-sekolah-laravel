<?php

use App\Http\Controllers\{HomeController, DashboardController, KompetensiController};
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

//Route Landing Page
Route::get('/',[HomeController::class,  'index'])->name('landing');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('galeri');
Route::get('/staff', [HomeController::class, 'staff'])->name('staff');
Route::get('/struktur', [HomeController::class, 'struktur'])->name('struktur');
Route::get('/kompetensi', [HomeController::class, 'kompetensi'])->name('kompetensi');
Route::get('/prestasi', [HomeController::class, 'prestasi'])->name('prestasi');
Route::get('/isi', [HomeController::class, 'isi'])->name('isi');

//Route Dashboard Page
Route::prefix('dashboard')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    //Route Kompetensi Keahlian
    Route::prefix('kompetensi')->group(function(){
        Route::get('/', [KompetensiController::class, 'index'])->name('dashboard.kompetensi');
        Route::get('/create', [KompetensiController::class, 'create'])->name('dashboard.kompetensi.create');
        Route::post('/store', [KompetensiController::class, 'store'])->name('dashboard.kompetensi.store');
        Route::get('/show/{$id}', [KompetensiController::class, 'show'])->name('dashboard.kompetensi.show');
        Route::get('/edit/{$id}', [KompetensiController::class, 'edit'])->name('dashboard.kompetensi.edit');
        Route::get('/update/{id}', [KompetensiController::class, 'update'])->name('dashboard.kompetensi.update');
        Route::get('/destroy/{$id}', [KompetensiController::class, 'destroy'])->name('dashboard.kompetensi.destroy');
    });
});
