<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;

Route::get('/', [ViewController::class, 'home'])->name('home');
Route::get('/catalogo', [ViewController::class, 'catalog'])->name('catalog'); 
Route::get('/servicios', [ViewController::class, 'services'])->name('services');
Route::get('/contacto', [ViewController::class, 'contact'])->name('contact');