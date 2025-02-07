<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::controller(AdminController::class)->group(function(){
    Route::get('/', "login")->name("login");
    Route::get("/dashboard", "dashboard")->name("dashboard");
    Route::get('/register', "register")->name("register");
    Route::post("/store", "store_data")->name("store");
});
