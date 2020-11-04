<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//frontend-asset
// Route::get('/', 'MainController@index')->name('homepage');
// Route::get('testing', 'MainController@testing')->name('testingpage');
// Route::get('about', 'MainController@about')->name('aboutpage');
// Route::get('contact', 'MainController@contact')->name('contactpage');

//brands
Route::resource('brand', 'BrandController');  

//categories
Route::resource('category','CategoryController');  

//subcategories
Route::resource('subcategory','SubCategoryController');   

//item
Route::resource('item','ItemController');   

//frontend-asset
Route::get('/','FrontendController@index')->name('homepage');
Route::get('/user_login','FrontendController@login')->name('loginpage');
Route::get('/user_register','FrontendController@register')->name('registerpage');
    
//auth
Auth::routes(['register' => false]);


