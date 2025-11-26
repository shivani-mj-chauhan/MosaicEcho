<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PuserController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PuserController::class , 'index'])->name('pusers.index');
Route::get('/create', [PuserController::class , 'create'])->name('pusers.create');
Route::get('/store', [PuserController::class , 'store'])->name('pusers.store');
Route::get('/loginForm', [PuserController::class , 'loginForm'])->name('pusers.loginform');
Route::get('/login', [PuserController::class , 'login'])->name('pusers.login');
Route::get('/logout', [PuserController::class , 'logout'])->name('pusers.logout');
Route::get('/show', [PuserController::class , 'show'])->name('pusers.show');
Route::get('/edit', [PuserController::class , 'edit'])->name('pusers.edit');
Route::get('/update', [PuserController::class , 'update'])->name('pusers.update');
Route::get('/delete', [PuserController::class , 'destroy'])->name('pusers.destroy');
