<?php

use App\Http\Controllers\GoogleSheetsController;
use Illuminate\Support\Facades\Route;

Route::get('/sheets',[GoogleSheetsController::class, 'Index'])->name('sheet');
Route::get('/sheets/create',[GoogleSheetsController::class,'Create'])->name('create');
Route::post('/sheets/store',[GoogleSheetsController::class,'Store'])->name('store');
