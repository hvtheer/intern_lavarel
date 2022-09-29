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

Route::name('admin.')->prefix('admin')->group(function () {
    Route::resource('user', App\Http\Controllers\UserController::class);
    Route::resource('role', App\Http\Controllers\RoleController::class);
    Route::resource('permission', App\Http\Controllers\PermissionController::class);
    Route::resource('product', App\Http\Controllers\ProductController::class);
    Route::resource('category', App\Http\Controllers\CategoryController::class);
});
// Route::prefix('admin')->group(function () {
//     Route::get('/user', [App\Http\Controllers\UserController::class, 'index']);
//     Route::get('/user/create', [App\Http\Controllers\UserController::class, 'create']);
//     Route::get('/user/store', [App\Http\Controllers\UserController::class, 'store']);
//     Route::get('/user/mail', [App\Http\Controllers\UserController::class, 'mail']);
// });