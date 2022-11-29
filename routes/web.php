<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller1;

Route::get('/', [App\Http\Controllers\Controller1::class, 'comics']); 
Route::get('/catalog', [App\Http\Controllers\Controller1::class, 'comics']); 
Route::get('/aboutus', [App\Http\Controllers\Controller1::class, 'aboutus']); 
Route::get('/tofindus', [App\Http\Controllers\Controller1::class, 'tofindus']);
Route::get('/catalog/comics{id}', [App\Http\Controllers\Controller1::class, 'comicsid']);

Route::get('/admin', [App\Http\Controllers\Controller1::class, '']);  

Route::get('/register', [App\Http\Controllers\Controller1::class, 'auth']); 
Route::get('/login', [Controller1::class, 'auth']); 
Route::get('/logout', [App\Http\Controllers\Controller1::class, 'auth']); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
