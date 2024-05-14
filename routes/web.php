<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::resource('mahasiswa', MahasiswaController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    // Route::get('/mahasiswa', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('create');
Route::post('/mahasiswa/create', [MahasiswaController::class, 'save']);
Route::get('/mahasiswa/delete/{id}', [MahasiswaController::class, 'delete'])->name('delete');
Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'edit'])->name('edit');
Route::post('/mahasiswa/edit/{id}', [MahasiswaController::class, 'update']);
});
