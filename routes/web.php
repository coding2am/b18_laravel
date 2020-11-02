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

Route::get('/', 'MainController@index')->name('homepage');

Route::get('testing', 'MainController@testing')->name('testingpage');

Route::get('about', 'MainController@about')->name('aboutpage');

Route::get('contact', 'MainController@contact')->name('contactpage');

//brands
Route::resource('brand', 'BrandController');  

//categories
Route::resource('category','CategoryController');  

//subcategories
Route::resource('subcategory','SubCategoryController');   

//item
Route::resource('item','ItemController');   