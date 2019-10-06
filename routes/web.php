<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts/home');
})->name('home');

Route::get('/resorts', function(){
    return view('layouts/resorts');
})->name('resorts');

Route::get('/tourist', function(){
    return view('layouts/tourist');
})->name('tourist');

Route::get('/testimonios', function(){
    return view('layouts/testimonios');
})->name('testimonios');

Route::get('/prueba', function(){
    return view('layouts/prueba');
});

/*  <a class="nav-item nav-link" href="{{ route('resorts') }}">Resorts</a>
                    <a class="nav-item nav-link" href="{{ route('tourist') }}">Tours</a>
                    <a class="nav-item nav-link" href="{{ route('testimonios') }}">Testimonios</a>
                    
                    
          
                    */