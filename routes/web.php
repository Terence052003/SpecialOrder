<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::controller(AdminController::class)->group(function(){
    Route::get("/", "dashboard")->name("dashboard");
});
