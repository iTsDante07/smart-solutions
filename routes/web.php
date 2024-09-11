<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
route::get('/', [App\Http\Controllers\PagesController::class, 'home'])->name('home');
route::get('/over-ons', [App\Http\Controllers\PagesController::class, 'about'])->name('about');
route::get('/contact', [App\Http\Controllers\PagesController::class, 'contact'])->name('contact');

