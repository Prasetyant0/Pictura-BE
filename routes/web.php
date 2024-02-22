<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

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

Route::get('/', function(){
    return view('index');
});

Route::get('/explore', function(){
    return view('pages.explore');
});

Route::get('/explore/detail', function(){
    return view('pages.detailNoAuth');
});

Route::post('/register', [AuthController::class, 'register'])->name('register');
