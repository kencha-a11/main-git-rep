<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProfileController;
route::get('/profiles', [ProfileController::class,'getprofiles']);
Route::get('/profiles/{id}', [ProfileController::class,'getprofile']);