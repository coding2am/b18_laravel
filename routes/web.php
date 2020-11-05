<?php

use Illuminate\Support\Facades\Route;

//frontend-asset
// Route::get('/', 'MainController@index')->name('homepage');
// Route::get('testing', 'MainController@testing')->name('testingpage');
// Route::get('about', 'MainController@about')->name('aboutpage');
// Route::get('contact', 'MainController@contact')->name('contactpage');

//brands
Route::resource('brand', 'BrandController');

//categories
Route::resource('category', 'CategoryController');

//subcategories
Route::resource('subcategory', 'SubCategoryController');

//item
Route::resource('item', 'ItemController');

//frontend-asset
Route::get('/', 'FrontendController@index')->name('homepage');
Route::get('/user_login', 'FrontendController@login')->name('loginpage');
Route::get('/user_register', 'FrontendController@register')->name('registerpage');
Route::get('/item_detail/{id}', 'FrontendController@itemDetail')->name('itemdetail');
Route::get('itemsBySubCategory/{id}', 'FrontendController@itemsBySubCategory')->name('itemsBySubCategory');
Route::get('cart', 'FrontendController@cart')->name('cartpage');

//user-controller
Route::resource('user', 'UserController');

//auth
Auth::routes(['register' => false]);

//order
Route::resource('order', 'OrderController');
