<?php

use App\Http\Controllers\Backend\Modules\UserModule\User\UserController;
use Illuminate\Support\Facades\Route;


Route::prefix('user-module')->name('user-module.')->group(function () {
     Route::get("", [UserController::class, 'index'])->name("index");
});