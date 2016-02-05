<?php

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    // Home Controller
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');

    // Dashboard Controller
    Route::get('/dashboard', 'DashboardController@index');

    // Pages Controller
    Route::get('/about', 'PagesController@about');
    Route::get('/how-to/create-a-static-page', 'PagesController@addPage');
});