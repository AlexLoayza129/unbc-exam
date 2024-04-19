<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//* Users
Route::prefix('/users')->group(function () {
    //* Create view
    Route::get('/create', [UserController::class, 'create'])->name('user.create');

    //* Save user
    Route::post('/save', [UserController::class, 'save'])->name('user.save');

    //* Edit view
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('user.edit');

    //* Update user
    Route::post('/update', [UserController::class, 'update'])->name('user.update');

    //* Delete user
    Route::get('/{id}/delete', [UserController::class, 'delete'])->name('user.delete');
});
