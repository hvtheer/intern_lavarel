<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PermissionGroupController;
use App\Http\Controllers\LangController;

Route::prefix('admin')->middleware(['auth', 'verified', 'admin.verify'])->group(function () {
    Route::resource('user', UserController::class);
    Route::resource('role', RoleController::class);
    Route::resource('permission', PermissionController::class);
    Route::resource('permission-group', PermissionGroupController::class);
    Route::resource('product', ProductController::class);
    Route::resource('category', CategoryController::class);
    Route::get('/formSendMail', [UserController::class, 'formSendMail'])->name('formSendMail');
    Route::post('/formSendMail', [UserController::class, 'sendMailUserProfile'])->name('send');
    Route::get('lang/{lang}', [LangController::class, 'changeLang'])->name('lang');
});

Auth::routes(['verify' => true]);
Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
