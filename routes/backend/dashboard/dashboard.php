<?php

use App\Http\Controllers\Backend\Modules\DashboardModule\DashboardController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'dashboard'], function () {
     Route::get("", [DashboardController::class, 'index'])->name("dashboard.index");
});