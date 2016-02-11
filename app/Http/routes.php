<?php

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    // Home Controller
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');

    // Dashboard Controller
    Route::get('/dashboard', 'DashboardController@index');

    // Profile Controller
    Route::get('/profile/{username}', 'ProfileController@show');

    Route::get('/settings/edit-settings', 'ProfileController@getEditSettings');
    Route::post('/settings/edit-settings', 'ProfileController@postEditSettings');

    Route::get('/settings/edit-profile', 'ProfileController@getEditProfile');
    Route::post('/settings/edit-profile', 'ProfileController@postEditProfile');

    Route::get('/settings/password', 'ProfileController@getEditPassword');
    Route::post('/settings/password', 'ProfileController@postEditPassword');

    // Pages Controller
    Route::get('/about', 'PagesController@about');

    // Admin
    Route::get('/admin/dashboard', function () {
        return [
            'Message' => 'Coming soon to a project near you.',
            'Author' => 'Someone sexy.',
            'Disclaimer' => 'He isn\'t really.',
            '----------------------' => '--------------------',
            'Did you notice' => 'All of the keys above spell mad ;)'
        ];
    });
});