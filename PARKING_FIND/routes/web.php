<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
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

Route::get('/reserve', function() {
    return view('reserve');
})->name('reserve');

Route::get('update', function(){
    return view('update');
})->name('update');

Route::get('/delete', function(){
    return view('delete');
})->name('delete');

Route::get('/login', function(){
    return view('login');
})->name('login');

Route::get('/register', function(){
    return view('register');
})->name('register');

Route::post('/register', [UserController::class, 'register'])->name('register.post');

Route::get('/question', [QuestionController::class, 'index'])->name('question');

Route::get('/createpost', [QuestionController::class, 'create'])->name('createpost');