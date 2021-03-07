<?php

use Illuminate\Support\Facades\Route;


Route::group(["prefix"=>"admin"], function() {
    Route::group(["prefix"=>"auth"], function() {
        Route::get("login","Backend\Auth\AuthController@getLogin");
        Route::post("login","Backend\Auth\AuthController@postLogin");
    });

    Route::group(["middleware"=>[\App\Http\Middleware\AdminMiddleware::class]], function() {
        Route::get("/dashboard", "Backend\Auth\AuthController@dashboard");
        Route::get("/logout", "Backend\Auth\AuthController@getLogout");
    });
});



