<?php

use \Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\V1\OverviewController::class)
    ->group(function (){
        Route::get("/dashboard/overview", 'overview_view')->name("overview");
    });

Route::controller(\App\Http\Controllers\V1\MailController::class)
    ->group(function (){
        Route::get("/dashboard/mail", 'mail_view')->name("mail");
        Route::post("/dashboard/mail", 'mail')->name("mail");
    });

Route::controller(\App\Http\Controllers\V1\DocInfoController::class)
    ->group(function (){
        Route::get("/dashboard/doc_info", 'doc_info_view')->name("docInfo");
        Route::post("/dashboard/doc_info", 'doc_info')->name("docInfo");
    });

Route::controller(\App\Http\Controllers\V1\DigitizeDocController::class)
    ->group(function (){
        Route::get("/dashboard/doc_info", 'doc_info_view')->name("docInfo");
        Route::post("/dashboard/doc_info", 'doc_info')->name("docInfo");
    });

Route::controller(\App\Http\Controllers\V1\DigitizeTypeController::class)
    ->group(function (){
        Route::get("/dashboard/doc_info", 'doc_info_view')->name("docInfo");
        Route::post("/dashboard/doc_info", 'doc_info')->name("docInfo");
    });

Route::controller(\App\Http\Controllers\V1\DocClassificationController::class)
    ->group(function (){
        Route::get("/dashboard/doc_info", 'doc_info_view')->name("docInfo");
        Route::post("/dashboard/doc_info", 'doc_info')->name("docInfo");
    });

Route::controller(\App\Http\Controllers\V1\DocHistoryController::class)
    ->group(function (){
        Route::get("/dashboard/doc_info", 'doc_info_view')->name("docInfo");
        Route::post("/dashboard/doc_info", 'doc_info')->name("docInfo");
    });

Route::controller(\App\Http\Controllers\V1\DocSourceController::class)
    ->group(function (){
        Route::get("/dashboard/doc_info", 'doc_info_view')->name("docInfo");
        Route::post("/dashboard/doc_info", 'doc_info')->name("docInfo");
    });


Route::controller(\App\Http\Controllers\V1\OfficeController::class)
    ->group(function (){
        Route::get("/dashboard/doc_info", 'doc_info_view')->name("docInfo");
        Route::post("/dashboard/doc_info", 'doc_info')->name("docInfo");
    });


Route::controller(\App\Http\Controllers\V1\UserController::class)
    ->group(function (){
        Route::get("/dashboard/doc_info", 'doc_info_view')->name("docInfo");
        Route::post("/dashboard/doc_info", 'doc_info')->name("docInfo");
    });

Route::controller(\App\Http\Controllers\V1\UserRoleController::class)
    ->group(function (){
        Route::get("/dashboard/user_role", 'user_role_view')->name("user-role");
        Route::post("/dashboard/user_role", 'user_role_create')->name("user_role_create");
    });



