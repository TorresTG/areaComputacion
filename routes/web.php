<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('interior.index');
})->name('home');

Route::get('/nosotros', function () {
    return view('interior.nosotros');
})->name('nosotros');

Route::get('/contacto', function () {
    return view('interior.contacto');
})->name('contacto');
