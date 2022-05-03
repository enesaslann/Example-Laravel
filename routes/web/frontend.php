<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'IndexController@index')->name('index');
    Route::get('/about', 'IndexController@about')->name('front.about'); 
    Route::group(['prefix' => 'portfolio'], function(){ 
        Route::get('/', 'IndexController@portfolio')->name('front.portfolio'); 
        Route::get('/{slug}', 'IndexController@portfolioSlug')->name('front.portfolio.detail'); 
    });
    Route::group(['prefix' => 'blog'], function(){ 
        Route::get('/', 'BlogController@blog')->name('front.blog'); 
        Route::get('/{slug}', 'BlogController@blogDetail')->name('front.blog.detail'); 
    });

    Route::group(['prefix' => 'contact'], function(){
        Route::get('/', 'IndexController@contact')->name('front.contact'); 
        Route::post('send', 'IndexController@create_contact')->name('front.contact.mesajGonder');
    });
});
