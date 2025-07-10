<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormsController;


Route::get('/', [FormsController::class, 'index'])->name('form.index');

Route::get('/create', [FormsController::class,'create'])->name('form.create');
Route::post('/store', [FormsController::class,'store'])->name('form.store');

Route::get('/edit/{id}', [FormsController::class,'edit'])->name('form.edit');
Route::post('/update/{id}', [FormsController::class,'update'])->name('form.update');

Route::get('/destroy/{id}', [FormsController::class,'destroy'])->name('form.destroy');

