<?php

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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/reservation', function() {
    return view('reservation1');
})->name('reservation');

Route::post('/reservation/{page?}', function($page = 2) {
    return view('reservation'.$page);
})->name('reservation');

Route::get('/question', function() {
    return view('question');
})->name('question');

Route::get('/createpost', function() {
    return view('createpost');
})->name('createpost');