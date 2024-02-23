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
    return view('Pages.explore');
});

Route::get('/explore/detail', function(){
    return view('Pages.detailNoAuth');
});

Route::view('/home', 'Pages.Authorized.home');
Route::view('/categoryToday', 'Pages.Authorized.imageTodayKlik');
Route::view('/today', 'Pages.Authorized.today');
Route::view('/create', 'Pages.Authorized.create');
Route::view('/profile', 'Pages.Authorized.Profile.profile');
Route::view('/profile-setting', 'Pages.Authorized.Profile.editProfile');
Route::view('/add-new-album', 'Pages.Authorized.makeAlbums');
Route::view('/detailhome', 'Pages.Authorized.detailAuth');
Route::view('/mydetail', 'Pages.Authorized.myDetail');
Route::view('/album-detail', 'Pages.Authorized.albumPage');
Route::post('/register', [AuthController::class, 'register'])->name('register');
