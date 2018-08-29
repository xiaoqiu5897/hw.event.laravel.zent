<?php

// Route::get('events', 'EventController@index');

// Route::get('events/{id}','EventController@show');

// Route::get('events/edit/{id}','EventController@edit');

// Route::put('events/{id}','EventController@update');

Route::resource('events-ajax','EventAjaxController');