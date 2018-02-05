<?php

//revalidate - Prevent visitors from using the back history to see authenticated pages after logging out
Route::group(['middleware' => 'revalidate'],function(){

    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

    Route::prefix('admin')->group(function(){
        Route::get('/', 'AdminController@index')->name('admin.dashboard');
        Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
        Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
        Route::get('getUser', 'AdminController@getUser')->name('getUser');

    });

    Route::prefix('photographer')->group(function(){
        Route::get('/', 'PhotographerController@index')->name('photographer.dashboard');
        Route::get('/login', 'Auth\PhotographerLoginController@showLoginForm')->name('photographer.login');
        Route::post('/login', 'Auth\PhotographerLoginController@login')->name('photographer.login.submit');
        Route::get('/logout', 'Auth\PhotographerLoginController@logout')->name('photographer.logout');

    });

});
//end revalidate