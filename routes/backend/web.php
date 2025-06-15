<?php

use App\Http\Controllers\Backend\Modules\UserModule\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('', [LoginController::class, 'loginPage'])->name('admin.login.page');
Route::post('do/login', [LoginController::class, 'doLogin'])->name('admin.do.login');

Route::middleware('admin.auth')->prefix("admin")->name('admin.')->group(function () {
     require_once "dashboard/dashboard.php";
});
