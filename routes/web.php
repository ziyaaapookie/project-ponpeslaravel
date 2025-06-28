<?php

use App\Http\Controllers\Agenda;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProgramPendidikan;
use App\Http\Controllers\ProgramPendidikanController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\Testimoni;
use App\Http\Controllers\TestimoniController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [AppController::class, 'index']);



Route::get('/artikel', function () {
    return view('artikel.artikel');
});

Route::get('/detail', function () {
    return view('artikel.detail');
});

Route::get('/profil', function () {
    return view('profil.profil');
});


Route::get('/programpendidikan', function () {
    return view('programpendidikan.programpendidikan');
});


Route::get('/galeri', function () {
    return view('galeri.galeri');
});

Route::get('/agenda', function () {
    return view('agenda.agenda');
});


Route::get('/staff', function () {
    return view('staff.staff');
});


Route::get('/testimoni', function () {
    return view('testimoni.testimoni');
});


// Route::get('/login', function () {
//     return view('auth.login');
// });
// Login
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);
// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');


// artikel
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel')->middleware('auth');
Route::get('/artikel/create', [ArtikelController::class, 'create'])->name('artikel.create')->middleware('auth');
Route::post('/artikel/store', [ArtikelController::class, 'store'])->name('artikel.store')->middleware('auth');
Route::get('/artikel/edit/{id}', [ArtikelController::class, 'edit'])->name('artikel.edit')->middleware('auth');
Route::post('/artikel/update/{id}', [ArtikelController::class, 'update'])->name('artikel.update')->middleware('auth');
Route::post('/artikel/destroy/{id}', [ArtikelController::class, 'destroy'])->name('artikel.destroy')->middleware('auth');



// galeri
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri')->middleware('auth');
Route::get('/galeri/create', [GaleriController::class, 'create'])->name('galeri.create')->middleware('auth');
Route::post('/galeri/store', [GaleriController::class, 'store'])->name('galeri.store')->middleware('auth');
Route::get('/galeri/edit/{id}', [GaleriController::class, 'edit'])->name('galeri.edit')->middleware('auth');
Route::post('/galeri/update/{id}', [GaleriController::class, 'update'])->name('galeri.update')->middleware('auth');
Route::post('/galeri/destroy/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy')->middleware('auth');


// staff
Route::get('/staff', [StaffController::class, 'index'])->name('staff')->middleware('auth');
Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create')->middleware('auth');
Route::post('/staff/store', [StaffController::class, 'store'])->name('staff.store')->middleware('auth');
Route::get('/staff/edit/{id}', [StaffController::class, 'edit'])->name('staff.edit')->middleware('auth');
Route::post('/staff/update/{id}', [StaffController::class, 'update'])->name('staff.update')->middleware('auth');
Route::post('/staff/destroy/{id}', [StaffController::class, 'destroy'])->name('staff.destroy')->middleware('auth');



// agenda
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda')->middleware('auth');
Route::get('/agenda/create', [AgendaController::class, 'create'])->name('agenda.create')->middleware('auth');
Route::post('/agenda/store', [AgendaController::class, 'store'])->name('agenda.store')->middleware('auth');
Route::get('/agenda/edit/{id}', [AgendaController::class, 'edit'])->name('agenda.edit')->middleware('auth');
Route::post('/agenda/update/{id}', [AgendaController::class, 'update'])->name('agenda.update')->middleware('auth');
Route::post('/agenda/destroy/{id}', [AgendaController::class, 'destroy'])->name('agenda.destroy')->middleware('auth');


// programpendidikan
Route::get('/programpendidikan', [ProgramPendidikanController::class, 'index'])->name('programpendidikan')->middleware('auth');
Route::get('/programpendidikan/create', [ProgramPendidikanController::class, 'create'])->name('programpendidikan.create')->middleware('auth');
Route::post('/programpendidikan/store', [ProgramPendidikanController::class, 'store'])->name('programpendidikan.store')->middleware('auth');
Route::get('/programpendidikan/edit/{id}', [ProgramPendidikanController::class, 'edit'])->name('programpendidikan.edit')->middleware('auth');
Route::post('/programpendidikan/update/{id}', [ProgramPendidikanController::class, 'update'])->name('programpendidikan.update')->middleware('auth');
Route::post('/programpendidikan/destroy/{id}', [ProgramPendidikanController::class, 'destroy'])->name('programpendidikan.destroy')->middleware('auth');


// testimoni
Route::get('/testimoni', [TestimoniController::class, 'index'])->name('testimoni')->middleware('auth');
Route::get('/testimoni/create', [TestimoniController::class, 'create'])->name('testimoni.create')->middleware('auth');
Route::post('/testimoni/store', [TestimoniController::class, 'store'])->name('testimoni.store')->middleware('auth');
Route::get('/testimoni/edit/{id}', [TestimoniController::class, 'edit'])->name('testimoni.edit')->middleware('auth');
Route::post('/testimoni/update/{id}', [TestimoniController::class, 'update'])->name('testimoni.update')->middleware('auth');
Route::post('/testimoni/destroy/{id}', [TestimoniController::class, 'destroy'])->name('testimoni.destroy')->middleware('auth');
