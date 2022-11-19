<?php

use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Home::class, 'index'])->name('contact.index');
Route::get('/create', [Home::class, 'create'])->name('contact.create');
Route::get('/show/{id}', [Home::class, 'show'])->name('contact.show');
Route::get('/edit/{id}', [Home::class, 'edit'])->name('contact.edit');
Route::post('/store', [Home::class, 'store'])->name('contact.store');
Route::put('/update/{id}', [Home::class, 'update'])->name('contact.update');
Route::post('/destroy/{id}', [Home::class, 'destroy'])->name('contact.destroy');

