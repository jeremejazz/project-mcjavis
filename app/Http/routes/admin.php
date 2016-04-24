<?php
use Illuminate\Support\Facades\Input;

Route::get('/admin','AdminController@index');
Route::get('order','AdminController@order');

Route::get('/login','AdminController@showLoginForm');

Route::post('/login/validate', 'AdminController@loginValidate');

/*Route::post('/login/validate', function(){

});*/