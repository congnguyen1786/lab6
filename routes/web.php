<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\QuanTriTinController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/download', function () {
    return view('download');
})->middleware('auth');

Route::get('/admin', function () {
    return view('quantri');
})->middleware('quantri');

Route::get('/admin', function () {
    return 'Trang này chỉ cho admin!';
})->middleware('auth.basic');



Route::get('/quantritin', [QuanTriTinController::class, 'index']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
