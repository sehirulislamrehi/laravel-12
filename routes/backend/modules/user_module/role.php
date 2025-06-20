<?php

use App\Http\Controllers\Backend\Modules\UserModule\Role\RoleController;
use Illuminate\Support\Facades\Route;


Route::prefix('role-module')->name('role-module.role.')->group(function () {
     Route::get("", [RoleController::class, 'index'])->name("index");
});