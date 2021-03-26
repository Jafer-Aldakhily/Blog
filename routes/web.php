<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

//Admin Controllers
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\TagController;
use App\Http\Controllers\admin\RoleController;

//User Controllers
use App\Http\Controllers\user\UserController;
use App\Http\Controllers\user\UserPostController;
use App\Models\user\User;

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

Route::get('/',[UserPostController::class , 'index']);

// retriving post using slug
Route::get('/post/{post}', [UserPostController::class , 'show'] )->name('post.slug');

// retriving post using tag
Route::get('post/tag/{tag}' , [UserPostController::class ,'Tag'])->name('post.by.tag');

// retriving post using category
Route::get('post/category/{category}' , [UserPostController::class ,'Category'])->name('post.by.cat');

// Amdin Grop Routes
Route::prefix('admin')->group(function () {

Route::resource('/post', PostController::class);
Route::resource('/category', CategoryController::class);
Route::resource('/tag', TagController::class);
Route::resource('/role', RoleController::class);

});

// This route for admin operations
Route::resource('/admin/panel', AdminController::class);

