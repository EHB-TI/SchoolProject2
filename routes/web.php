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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});


Route::match(['get', 'post'], 'welcome', function () {
    // Your route logic here
    return view('welcome');
})->name('welcome'); // Give the route a name for easy referencing

Route::match(['get', 'post'], 'home', function () {
    // Your route logic here
    return view('home');
})->name('home'); // Give the route a name for easy referencing


