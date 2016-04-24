<?php
Route::get('/', 'PageController@index');
Route::get('/cart', 'PageController@cart');
Route::get('/menu-order', 'PageController@menu');