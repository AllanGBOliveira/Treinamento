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

Route::get('/', function () {
    
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::Resource('books', 'BooksController');
Route::get('add','BooksController@add')->name('add');
Route::delete('books/delete/{id}', 'BooksController@delete')->name('delete');
Route::get('books/reserve/{id}','BooksController@reserve')->name('reserve');
Route::get('books/take/{id}','BooksController@take')->name('take');
Route::get('books/return/{id}','BooksController@return')->name('return');




