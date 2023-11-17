<?php

use App\Http\Controllers\{HomeController, DashboardController, KompetensiController, PrestasiController, staffController,StrukturController, GaleriController, AuthController};
use App\Models\Prestasi;
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
Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['admin_auth:admin']], function(){
        Route::prefix('dashboard')->group(function(){
            Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

            //Route Kompetensi Keahlian
            Route::prefix('kompetensi')->group(function(){
                Route::get('/', [KompetensiController::class, 'index'])->name('dashboard.kompetensi');
                Route::get('/create', [KompetensiController::class, 'create'])->name('dashboard.kompetensi.create');
                Route::post('/store', [KompetensiController::class, 'store'])->name('dashboard.kompetensi.store');
                Route::get('/show/{id}', [KompetensiController::class, 'show'])->name('dashboard.kompetensi.show');
                Route::get('/edit/{id}', [KompetensiController::class, 'edit'])->name('dashboard.kompetensi.edit');
                Route::put('/update/{id}', [KompetensiController::class, 'update'])->name('dashboard.kompetensi.update');
                Route::delete('/destroy/{id}', [KompetensiController::class, 'destroy'])->name('dashboard.kompetensi.destroy');
            });
        
            //Route Kompetensi prestasi
            Route::prefix('prestasi')->group(function(){
                Route::get('/', [PrestasiController::class, 'index'])->name('dashboard.prestasi');
                Route::get('/create', [PrestasiController::class, 'create'])->name('dashboard.prestasi.create');
                Route::post('/store', [PrestasiController::class, 'store'])->name('dashboard.prestasi.store');
                Route::get('/show/{id}', [PrestasiController::class, 'show'])->name('dashboard.prestasi.show');
                Route::get('/edit/{id}', [PrestasiController::class, 'edit'])->name('dashboard.prestasi.edit');
                Route::put('/update/{id}', [PrestasiController::class, 'update'])->name('dashboard.prestasi.update');
                Route::delete('/destroy/{id}', [PrestasiController::class, 'destroy'])->name('dashboard.prestasi.destroy');
            });
        
             //Route Kompetensi staff
             Route::prefix('staff')->group(function(){
                Route::get('/', [staffController::class, 'index'])->name('dashboard.staff');
                Route::get('/create', [staffController::class, 'create'])->name('dashboard.staff.create');
                Route::post('/store', [staffController::class, 'store'])->name('dashboard.staff.store');
                Route::get('/show/{id}', [staffController::class, 'show'])->name('dashboard.staff.show');
                Route::get('/edit/{id}', [staffController::class, 'edit'])->name('dashboard.staff.edit');
                Route::put('/update/{id}', [staffController::class, 'update'])->name('dashboard.staff.update');
                Route::delete('/destroy/{id}', [staffController::class, 'destroy'])->name('dashboard.staff.destroy');
            });
        
            //Route Kompetensi struktur
            Route::prefix('Struktur')->group(function(){
                Route::get('/', [StrukturController::class, 'index'])->name('dashboard.struktur');
                Route::get('/create', [StrukturController::class, 'create'])->name('dashboard.struktur.create');
                Route::post('/store', [StrukturController::class, 'store'])->name('dashboard.struktur.store');
                Route::get('/show/{id}', [StrukturController::class, 'show'])->name('dashboard.struktur.show');
                Route::get('/edit/{id}', [StrukturController::class, 'edit'])->name('dashboard.struktur.edit');
                Route::put('/update/{id}', [StrukturController::class, 'update'])->name('dashboard.struktur.update');
                Route::delete('/destroy/{id}', [StrukturController::class, 'destroy'])->name('dashboard.struktur.destroy');
            });
            //Route Kompetensi galeri
            Route::prefix('galeri')->group(function(){
                Route::get('/', [GaleriController::class, 'index'])->name('dashboard.galeri');
                Route::get('/create', [GaleriController::class, 'create'])->name('dashboard.galeri.create');
                Route::post('/store', [GaleriController::class, 'store'])->name('dashboard.galeri.store');
                Route::get('/show/{id}', [GaleriController::class, 'show'])->name('dashboard.galeri.show');
                Route::get('/edit/{id}', [GaleriController::class, 'edit'])->name('dashboard.galeri.edit');
                Route::put('/update/{id}', [GaleriController::class, 'update'])->name('dashboard.galeri.update');
                Route::delete('/destroy/{id}', [GaleriController::class, 'destroy'])->name('dashboard.galeri.destroy');
            });
        });
    });
});

//Auth Login
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('regist', [AuthController::class, 'regist'])->name('regist');
Route::post('registProcess', [AuthController::class, 'regist_proses'])->name('regist_proc');
Route::post('loginProcess', [AuthController::class, 'login_proses'])->name('login_proc');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
