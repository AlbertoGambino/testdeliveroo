<?php

use Illuminate\Support\Facades\Route;

// first view on opening
Route::get('/', 'RestaurantController@index')
    ->name('homepage');

Route::resources([
    'users'       => 'UserController',
    'restaurants' => 'RestaurantController',
    'categories'  => 'CategoryController',
    'dishes'      => 'DishController',
    'orders'      => 'OrderController',
]);

// authentication routes
Auth::routes();

Route::get('/1', function () {
    return view('pages.restaurants.protected-show');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
