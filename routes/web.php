<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller1;

Route::get('/', [App\Http\Controllers\Controller1::class, 'catalog']); 

Route::get('/admin', [App\Http\Controllers\Controller1::class, '']); 

Route::get('/aboutus', [App\Http\Controllers\Controller1::class, 'aboutus']); 

Route::get('/tofindus', [App\Http\Controllers\Controller1::class, 'tofindus']); 

Route::get('/login', [Controller1::class, 'auth']); 

Route::get('/registration', [App\Http\Controllers\Controller1::class, 'auth']); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');