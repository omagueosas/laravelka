<?php

use Illuminate\Support\Facades\Route;

Route::get('pexxedrg/catalog', [App\Http\Controllers\Controller1::class, 'catalog']); 

Route::get('pexxedrg/admin', [App\Http\Controllers\Controller1::class, '']); 

Route::get('pexxedrg/aboutus', [App\Http\Controllers\Controller1::class, 'aboutus']); 

Route::get('pexxedrg/tofindus', [App\Http\Controllers\Controller1::class, 'tofindus']); 

Route::get('pexxedrg/login', [App\Http\Controllers\Controller1::class, 'login']); 

Route::get('pexxedrg/registration', [App\Http\Controllers\Controller1::class, 'registration']); 