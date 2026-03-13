<?php

use Illuminate\Support\Facades\Route;
Route::get('/user', ['App\\Http\\Controllers\\UserController', 'show']);

Route::get('/user/all', ['App\\Http\\Controllers\\UserController', 'All']);

Route::get('/user/{username}', ['App\\Http\\Controllers\\UserController', 'username']);

Route::get('/user/{surname}/{name}', ['App\\Http\\Controllers\\UserController', 'Surnameuser']);

Route::get('/user1/{user}', ['App\\Http\\Controllers\\UserController', 'userCity']);

Route::get('/user2/', ['App\\Http\\Controllers\\UserController', 'showBlade'])