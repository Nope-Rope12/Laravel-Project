<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormsController;

Route::get('/create', [FormsController::class,'create'])->name('form.create');
Route::post('/store', [FormsController::class,'store'])->name('form.store');
Route::get('/sucess',function() {
   return view('sucess');
})->name('sucess');
Route::get('/', [FormsController::class, 'index'])->name('form.index');

