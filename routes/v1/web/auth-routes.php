<?php


use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\V1\AuthController;

Route::controller(AuthController::class)
    ->group(function (){
        Route::get("/", 'login_view')->name("login");
        Route::post("/", 'login')->name("login");

        Route::get("/sign-up", 'register_view')->name("register");
        Route::post("/sign-up", 'register')->name("register");
    });

