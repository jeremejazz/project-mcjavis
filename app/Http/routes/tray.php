<?php

Route::get('/tray', 'Tray@index');

Route::get('/tray/add', 'Tray@add');

Route::get('/tray/delete/{menu_id}', 'Tray@delete');

Route::get('/tray/view', 'Tray@view');

Route::get('/tray/all', 'Tray@all');

Route::get('/tray/clear', 'Tray@clear');

Route::get('/tray/total_qty', 'Tray@total_qty');

Route::get('/tray/total', 'Tray@total');