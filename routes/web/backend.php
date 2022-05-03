<?php

Route::group(['prefix' => 'azra-admin', 'namespace' => 'Admin'], function () {
	Route::get('/', 'AccountController@index')->name('admin.loginIndex');
	Route::post('oturum-ac', 'AccountController@login')->name('admin.login');
	Route::post('kayit-ol', 'AccountController@kayitol')->name('admin.kayitol');
	Route::group(['prefix' => 'panel', 'middleware' => 'admin'], function () {
		Route::get('/', 'IndexController@index')->name('admin.index');
		Route::get('oturum-kapat', 'AccountController@logout')->name('admin.logout');

		Route::group(['prefix' => 'blog'], function () {
			Route::get('/', 'BlogController@index')->name('admin.blog.index');
			Route::get('create', 'BlogController@createIndex')->name('admin.blog.create.index');
			Route::post('create', 'BlogController@create')->name('admin.blog.create');
			Route::get('update/{id}', 'BlogController@updateIndex')->name('admin.blog.update.index');
			Route::post('update/{id}', 'BlogController@update')->name('admin.blog.update');
			Route::get('active/{id}', 'BlogController@active')->name('admin.blog.status.active');
			Route::get('passive/{id}', 'BlogController@passive')->name('admin.blog.status.passive');
			Route::get('delete/{id}', 'BlogController@delete')->name('admin.blog.delete');
		});   
		Route::group(['prefix' => 'slider'], function () {
			Route::get('/', 'SliderController@index')->name('admin.slider.index');
			Route::get('create', 'SliderController@createIndex')->name('admin.slider.create.index');
			Route::post('create', 'SliderController@create')->name('admin.slider.create');
			Route::get('update/{id}', 'SliderController@updateIndex')->name('admin.slider.update.index');
			Route::post('update/{id}', 'SliderController@update')->name('admin.slider.update');
			Route::get('active/{id}', 'SliderController@active')->name('admin.slider.status.active');
			Route::get('passive/{id}', 'SliderController@passive')->name('admin.slider.status.passive');
			Route::get('delete/{id}', 'SliderController@delete')->name('admin.slider.delete');
		});    

		Route::group(['prefix' => 'team'], function () {
			Route::get('/', 'TeamController@index')->name('admin.team.index');
			Route::get('create', 'TeamController@createIndex')->name('admin.team.create.index');
			Route::post('create', 'TeamController@create')->name('admin.team.create');
			Route::get('update/{id}', 'TeamController@updateIndex')->name('admin.team.update.index');
			Route::post('update/{id}', 'TeamController@update')->name('admin.team.update');
			Route::get('active/{id}', 'TeamController@active')->name('admin.team.status.active');
			Route::get('passive/{id}', 'TeamController@passive')->name('admin.team.status.passive');
			Route::get('delete/{id}', 'TeamController@delete')->name('admin.team.delete');
		});    
		Route::group(['prefix' => 'about'], function () {
			Route::get('/', 'AboutController@index')->name('admin.about.index');  
			Route::post('update/{id}', 'AboutController@update')->name('admin.about.update'); 
		});  

		Route::group(['prefix' => 'message'], function () {
			Route::get('/', 'MessageController@index')->name('admin.message.index');  
			Route::get('/delete/{id}', 'MessageController@delete')->name('admin.message.delete');  
		});  

		Route::group(['prefix' => 'contact'], function () {
			Route::get('/', 'ContactController@index')->name('admin.contact.index');  
			Route::post('update/{id}', 'ContactController@update')->name('admin.contact.update'); 
		});  


		Route::group(['prefix' => 'site'], function () {
			Route::get('/', 'SiteController@index')->name('admin.site.index');  
			Route::post('update/{id}', 'SiteController@update')->name('admin.site.update'); 
		});  

		Route::group(['prefix' => 'portfolio'], function () {
			Route::get('/', 'PortfolioController@index')->name('admin.portfolio.index');  
			Route::post('update/{id}', 'PortfolioController@update')->name('admin.portfolio.update'); 
		});       

		Route::group(['prefix' => 'project'], function () {
			Route::get('/', 'ProjectController@index')->name('admin.proje.index');
			Route::get('create', 'ProjectController@createIndex')->name('admin.proje.create.index');
			Route::post('create', 'ProjectController@create')->name('admin.proje.create');
			Route::get('update/{id}', 'ProjectController@updateIndex')->name('admin.proje.update.index');
			Route::post('update/{id}', 'ProjectController@update')->name('admin.proje.update');
			Route::get('active/{id}', 'ProjectController@active')->name('admin.proje.status.active');
			Route::get('passive/{id}', 'ProjectController@passive')->name('admin.proje.status.passive');
			Route::get('delete/{id}', 'ProjectController@delete')->name('admin.proje.delete');

			Route::group(['prefix' => '/image'], function () {
				Route::get('/{proje}', 'ProjectImageController@index')->name('admin.proje.image');
				Route::post('create/{proje}', 'ProjectImageController@create')->name('admin.proje.image.create');
				Route::get('create/{proje}', 'ProjectImageController@createIndex')->name('admin.proje.image.create.index');
				Route::get('delete/{id}', 'ProjectImageController@delete')->name('admin.proje.image.delete');

				Route::get('order/{proje}', 'ProjectImageController@orderIndex')->name('admin.proje.image.order.index');
				Route::post('order/{proje}', 'ProjectImageController@order')->name('admin.proje.image.order');
			});
		});   


	});
});


