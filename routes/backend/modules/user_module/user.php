<?php

use App\Http\Controllers\Backend\Modules\UserModule\User\UserController;
use Illuminate\Support\Facades\Route;


Route::prefix('user-module')->name('user-module.user.')->group(function () {
     Route::get("", [UserController::class, 'index'])->name("index");
     Route::get("data", [UserController::class, 'data'])->name("data");
     Route::get("create", [UserController::class, 'createModal'])->name("create.modal");
     Route::post("create", [UserController::class, 'create'])->name("create");
     Route::get("update/{id}", [UserController::class, 'updateModal'])->name("update.modal");
     Route::post("update/{id}", [UserController::class, 'update'])->name("update");
});