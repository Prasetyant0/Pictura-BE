<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;

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

Route::middleware(['web', 'guest'])->group(function () {
    Route::view('/', 'index')->name('landing');
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('login');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/explore/detail', function(){
        return view('Pages.detailNoAuth');
    });
});

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::view('/categoryToday', 'Pages.Authorized.imageTodayKlik');
    Route::view('/today', 'Pages.Authorized.today');
    Route::view('/create', 'Pages.Authorized.create');
    Route::view('/profile', 'Pages.Authorized.Profile.profile');
    Route::view('/profile-setting', 'Pages.Authorized.Profile.editProfile');
    Route::view('/add-new-album', 'Pages.Authorized.makeAlbums');
    Route::view('/detailhome', 'Pages.Authorized.detailAuth');
    Route::view('/mydetail', 'Pages.Authorized.myDetail');
    Route::view('/album-detail', 'Pages.Authorized.albumPage');
    Route::get('/explore', function(){
    return view('Pages.explore');
    });

    Route::get('/logout', [AuthController::class,'logout']);
});

// Admin
Route::prefix('admin')->group(function () {
    Route::view('/nimda', 'Admin.loginAdmin');
    Route::view('/post-report', 'Admin.postReport');
    Route::view('/account-report', 'Admin.accountReport');
    Route::view('/comment-report', 'Admin.commentReport');
    Route::view('/admin-list', 'Admin.adminList');
    Route::view('/new-admin-add', 'Admin.formAdminNew');
    Route::view('/detail-admin', 'Admin.detailAdminProfile');
    Route::view('/preview-acc', 'Admin.previewAcc');
    Route::view('/preview-comment', 'Admin.previewComment');
    Route::view('/preview-post', 'Admin.previewPost');
    Route::view('/category-post', 'Admin.category-post');
});



