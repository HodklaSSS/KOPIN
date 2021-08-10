<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])
    ->name('home')
    ->middleware('auth');

Route::get('/admin/home', [AdminController::class, 'index'])
    ->name('admin.home')
    ->middleware('is_admin');

Route::get('/anggota/profile/', [AnggotaController::class, 'tampil'])
    ->name('profile')
    ->middleware('auth');