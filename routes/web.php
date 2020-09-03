<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PostController@index');
Route::get('/post', 'PostController@index')->name('post.index');
Route::get('/post/create', 'PostController@create')->name('post.create');



