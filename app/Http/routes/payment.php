<?php
//All payment routes

Route::get('/payment', 'Payments@index');

Route::get('/payment/checkout', 'Payments@checkout');
Route::post('/payment/checkout', 'Payments@checkout');
Route::get('/payment/success', 'Payments@success');
Route::get('/payment/failure', 'Payments@failure');
Route::get('/payment/cancel', 'Payments@cancel');
