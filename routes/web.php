<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('remove/words', [\App\Http\Controllers\HomeController::class,'removeWords']);
