<?php
//All payment routes

Route::get('/payment', 'Payments@index');

Route::post('/payment/checkout', 'Payments@checkout');
