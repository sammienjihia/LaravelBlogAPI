<?php

Route::group([

    'middleware' => 'api'

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('logout', 'AuthController@logout');



//    Route::post('blogs', 'BlogController@store')->name('blogs.store');
//    Route::get('blogs', 'BlogController@index')->name('blogs.index');

    Route::resource('blogs', 'BlogController');


});




