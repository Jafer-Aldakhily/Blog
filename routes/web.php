<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

//Admin Controllers
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\TagController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\PermissionController;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

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
Route::resource('/permission', PermissionController::class);
Route::resource('/user', UserController::class);

});

// This route for admin operations
Route::resource('/admin/panel', AdminController::class);



Route::group(['prefix' => 'admin' , 'middleware' => ['admin:admin']],function()
{
	Route::get('/login' , [AdminController::class , 'loginForm']);
	Route::post('/login' , [AdminController::class , 'store'])->name('admin.store');

});
//Admin Logout
Route::get('/admin/logout' , [AdminController::class , 'destroy'])->name('admin.logout');

//User Logout
Route::get('/logout' , [UserController::class , 'destroy'])->name('user.logout');
//User Login Store
Route::post('/user/login' , [AuthenticatedSessionController::class , 'store'])->name('user.store');

Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.home');
})->name('admin.dashboard');

Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    return view('/');
})->name('dashboard');


/* 
You Should now the user folder which it inside the admin folder it means that admin
can create new admins which call it as super admin.
*/

Route::get('test', function(){
	return view('admin.user.create');
});


Route::post('add/admin' , [UserController::class , 'store'])->name('add.admin');


Route::get('test' , [PostController::class , 'test'])->name('r.test');