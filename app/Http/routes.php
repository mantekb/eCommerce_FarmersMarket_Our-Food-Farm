<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => '/', 'uses' => 'HomeController@index']);

Route::auth();

Route::group(['prefix' => '/stand'], function() {
	//Use middleware to ensure you can only make a stand if you are logged in.
	Route::match(['get', 'post'], '/create', 'StandController@create')->middleware('onestand');
	Route::get('/{stand}', ['as' => '/{stand}', 'uses' => 'StandController@view']);
});

Route::get('learning', function() {
	//Replace function with a controller function instead.
	$articles = [
		[
			'title' => 'Tomatoes',
			'excerpt' => 'something somethings',
			'author' => 'Farmer'
		],
		[
			'title' => 'Corn',
			'excerpt' => 'something somethings',
			'author' => 'Stand Owner'
		],
	];
	return view('learning.learning-resources', ['articles' => $articles]);
});

Route::group(['prefix'=>'/settings', 'middleware'=>'auth'], function() {
	Route::get('/', ['as' => '/', 'uses' => 'SettingsController@index']);
	Route::post('/name', 'SettingsController@changeName');
});

Route::group(['prefix' => '/location'], function() {
	Route::post('/get-lat-long', 'LocationController@getCoords');
	Route::post('/save', 'LocationController@saveGeoLocation');
});