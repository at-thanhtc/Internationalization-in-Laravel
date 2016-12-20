<?php

Route::group(['middleware' => 'localization', 'prefix' => Session::get('locale')], function() {

    Auth::routes();

    Route::get('/home', 'HomeController@index');

    Route::post('/lang', [
        'as' => 'switchLang',
        'uses' => 'LangController@postLang',
    ]);

    Route::get('/', function () {
        return view('welcome');
    });
});