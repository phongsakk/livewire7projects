<?php

use App\Http\Livewire\Calculator;
use App\Http\Livewire\Counter;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('counter', Counter::class)->name('counter');
Route::get('calculator', Calculator::class)->name('calculator');
Route::get('todo-list', Calculator::class)->name('todo-list');
Route::get('cascading-dropdown', Calculator::class)->name('cascading-dropdown');
Route::get('products', Calculator::class)->name('products');
Route::get('image-upload', Calculator::class)->name('image-upload');
Route::get('register', Calculator::class)->name('register');
