<?php

use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TodayController;

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
    Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);
    Route::get('login/google', [AuthController::class, 'redirectToGoogle']);
    Route::get('/explore', function () {
    return view('Pages.explore');
    });
    Route::get('/explore/detail', function () {
    return view('Pages.detailNoAuth');
    });
});

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::view('/categoryToday', 'Pages.Authorized.imageTodayKlik');
    Route::get('/today', [TodayController::class, 'index']);
    Route::get('/create', [PostController::class, 'index'])->name('create');
    Route::get('/profile/{id}', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile-setting/{id}', [ProfileController::class, 'profileSetting']);
    Route::get('/add-new-album', [AlbumController::class, 'index']);
    Route::post('/save-news-album', [AlbumController::class, 'store']);
    Route::post('/addPhotoToAlbum/{albumId}/{photoId}', [AlbumController::class, 'addPhotoToAlbum']);
    Route::view('/detailhome', 'Pages.Authorized.detailAuth');
    Route::get('/mydetail/{uuid}', [ProfileController::class, 'myDetail']);
    Route::get('/album-detail/{id}', [AlbumController::class, 'showAlbumDetail']);

    Route::post('/upload-post', [PostController::class, 'upload_post']);
    Route::post('/update-post/{id}', [PostController::class, 'updatePost']);
    Route::get('/delete-item/{photoId}', [PostController::class, 'deletePhoto']);
    Route::post('/commentPost', [PostController::class, 'postComment']);
    Route::get('/showComment/{id}', [ProfileController::class, 'showComment']);
    Route::post('/likePost', [ProfileController::class, 'likes']);
    Route::get('/showPostModal/{id}', [PostController::class, 'showPostModal']);
    Route::get('/search', [HomeController::class, 'search']);
    Route::get('/download-image/{id}', [HomeController::class, 'download']);
    Route::get('/detailPost/{uuid}', [HomeController::class, 'detailPostHome']);
    Route::post('/add-to-favorite', [HomeController::class, 'addToFavorite']);
    Route::post('/toggleFollow/{id}', [ProfileController::class, 'toggleFollow']);
    Route::get('/checkFollow/{id}', [ProfileController::class, 'checkFollowStatus']);
    Route::post('/followingUser', [ProfileController::class, 'profileFollow']);
    Route::get('/logout', [AuthController::class, 'logout']);
});

// Admin
Route::prefix('admin')->group(function () {
    Route::view('/cpanel-pictura', 'Admin.loginAdmin');
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
