<?php

use Illuminate\Support\Facades\Route;

Route::name('admin.')->prefix('admin')->group(function () {
    Route::resource('user', App\Http\Controllers\UserController::class);
    Route::resource('role', App\Http\Controllers\RoleController::class);
    Route::resource('permission', App\Http\Controllers\PermissionController::class);
    Route::resource('product', App\Http\Controllers\ProductController::class);
    Route::resource('category', App\Http\Controllers\CategoryController::class);
});

Route::get('/formSendMail', [App\Http\Controllers\UserController::class, 'formSendMail'])->name('formSendMail');
Route::post('/formSendMail', [App\Http\Controllers\UserController::class, 'sendMailUserProfile'])->name('send');