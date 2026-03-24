<?php

use Illuminate\Support\Facades\Route;
Route::get('/user', ['App\\Http\\Controllers\\UserController', 'show']);

Route::get('/user/all', ['App\\Http\\Controllers\\UserController', 'All']);

Route::get('/user/{username}', ['App\\Http\\Controllers\\UserController', 'username']);

Route::get('/user/{surname}/{name}', ['App\\Http\\Controllers\\UserController', 'Surnameuser']);

Route::get('/user1/{user}', ['App\\Http\\Controllers\\UserController', 'userCity']);

Route::get('/view', ['App\\Http\\Controllers\\PostController', 'showW']);

Route::get('/viewW', ['App\\Http\\Controllers\\PostController', 'showWW']);

Route::get('/viewW1', ['App\\Http\\Controllers\\PostController', 'showW1']);

Route::get('/viewW2', ['App\\Http\\Controllers\\PostController', 'showW2']);

Route::get('/viewW3', ['App\\Http\\Controllers\\PostController', 'showW3']);

Route::get('/viewW4', ['App\\Http\\Controllers\\PostController', 'showW4']);