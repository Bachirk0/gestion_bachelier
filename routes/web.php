<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BachelierController;

Route::resource('bacheliers', BachelierController::class);

Route::get('/', function () {
    return view('welcome');
});
