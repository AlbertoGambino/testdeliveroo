<?php

use Illuminate\Support\Facades\Route;

// first view on opening
// Route::get('/', 'RestaurantController@index')
//     ->name('homepage');

// Route::resources([
//     'users'       => 'UserController',
//     'restaurants' => 'RestaurantController',
//     'categories'  => 'CategoryController',
//     'dishes'      => 'DishController',
//     'orders'      => 'OrderController',
// ]);

// // authentication routes
// Auth::routes();


Route::view('/protected', 'pages.restaurants.protected-show');

Route::view('/public', 'pages.restaurants.public-show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 
 