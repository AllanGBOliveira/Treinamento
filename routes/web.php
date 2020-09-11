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

/*Route::get('/','BooksController@index');*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::Resource('books', 'BooksController');
Route::get('/add', function () {
    return view('add');
});
Route::delete('books/delete/{id}', 'BooksController@delete')->name('delete');


Route::get('reserve/{id}','BooksController@reserve')->name('reserve');
Route::get('books/val/{id}','BooksController@val')->name('val');
Route::get('books/return/{id}','BooksController@return')->name('return');




