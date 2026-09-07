<?php

use Illuminate\Support\Facades\Route;

Route::name("public.")->group(function() {
    Route::get('/', function () {
        return view('welcome');
    })->name("home");
});