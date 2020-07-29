<?php

    Route::group([
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','checkuser' ]
    ],function(){
        Route::prefix('dashboard')->name('dashboard.')->group(function(){
            Config::set('auth.defines','dashboard');
    Route::get('/index','Home@index')->name('index');
    Route::resource('users','Users')->except(['show']);
    Route::resource('categories','Categories')->except(['show']);
    Route::resource('courses','Courses');
    Route::resource('skills','Skills')->except(['show']);
    Route::resource('tages','Tages')->except(['show']);
    Route::resource('pages','Pages')->except(['show']);
    Route::resource('videos','Videos');
    Route::resource('profiles','Profiles');
    Route::resource('messages','Messages')->only(['index','destroy']);
    Route::get('login','Auth\LoginController@loginPage')->name('loginPage');
    Route::post('login','Auth\LoginController@login')->name('login');

    Route::post('comments','Videos@commentStore')->name('comments.store');
    Route::put('comment/{id}','Videos@commentUpdate')->name('comment.update');
    Route::delete('comment/{id}','Videos@commentDelete')->name('comment.destroy');

        });
    });

