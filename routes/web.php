<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormsController;

Route::get('/', [FormsController::class,'create'])->name('form.index');
Route::post('/', [FormsController::class,'store'])->name('form.store');
Route::get('/sucess',function() {
   return view('sucess');
})->name('sucess');

