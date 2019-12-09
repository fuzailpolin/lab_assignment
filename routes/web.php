<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index');


Route::group(['middleware'=>['sess']], function(){
	
	Route::group(['middleware'=>['type']], function(){
		
		//admin home view
		Route::get('/adminHome', 'adminController@index')->name('admin.index');
		
		//admin Registration
		Route::get('/registration', 'regController@index')->name('registration.index');
		Route::post('/registration', 'regController@store')->name('registration.store');
	});
	
	//customer home view
	Route::get('/home', 'homeController@index')->name('home.index');
	Route::get('/home/vehicle', 'homeController@vehicle')->name('home.vehicle');
	Route::get('/home/gallary/{id}', 'homeController@gallary')->name('home.gallary');
	Route::get('/home/about', 'homeController@about')->name('home.about');
	Route::get('/home/upload', 'ImageCrudController@index')->name('image.upload');
	Route::post('/home/upload', 'ImageCrudController@store')->name('image.store');
	
	Route::get('/home/edit/{img}', 'imgManupulationController@index')->name('imgMan.index');
	Route::post('/home/edit/{img}', 'imgManupulationController@editImg');
	
	Route::get('/home/layout/{lay}', 'LayoutModelController@index')->name('layout.index');
	
	Route::get('/home/crop/{img}', 'imgManupulationController@crop')->name('imgMan.crop');
	Route::post('/home/crop/{img}', 'imgManupulationController@cropImage');
});