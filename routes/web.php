<?php

use Illuminate\Support\Facades\Route;



Route::get('/','HomeController@home');
Route::get('/welcome','HomeController@home')->name('home');
Route::get('/about','AboutController@about')->name('about');
Route::get('/service','ServiceController@service')->name('service');
Route::get('/blog','BlogController@blog')->name('blog');
Route::get('/single-blog','SingleBlocController@single')->name('single-blog');
Route::get('/room','RoomController@room')->name('room');
Route::get('/contact','ContactController@contact')->name('contact');
Route::get('/book','BookController@book')->name('book');
