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

Route::get('/welcome', ['as' => 'welcome','uses' => 
	function () {
	return view('welcome');
	}]);

    Route::get('/dashboard', ['as'=>'dashboard', 'uses'=>'DashboardController@getDashboard']);

// -------------------------------------------user----------------------------------------------------	

    Route::post('/users', ['as'=>'createUser', 'uses'=>'UserController@createUser']);
    Route::get('/users', ['as'=>'users', 'uses'=>'UserController@getUser']);

// -------------------------------------------tour----------------------------------------------------	    

    Route::post('/tours', ['as'=>'createTour', 'uses'=>'TourController@createTour']);
    Route::get('/tours', ['as'=>'tours', 'uses'=>'TourController@getTour']);

// -------------------------------------------tour details----------------------------------------------

    Route::post('/toursdetails', ['as'=>'createTourDetails', 'uses'=>'TourController@createTourDetails']);
    Route::get('/toursdetails',['as'=>'toursdetails', 'uses'=>'TourController@getTourDetails']);

// -------------------------------------------tour category-----------------------------------------------	

    Route::post('/tourscategory', ['as'=>'createTourCategory', 'uses'=>'TourController@createTourCategory']);
    Route::get('/tourscategory', ['as'=>'tourscategory', 'uses'=>'TourController@getTourCategory']);

// -------------------------------------------service----------------------------------------------------	

    Route::post('/services', ['as'=>'createService', 'uses'=>'ServiceController@createService']);
    Route::get('/services', ['as'=>'services', 'uses'=>'ServiceController@getService']);

// -------------------------------------------service category--------------------------------------------

	Route::post('/servicescategory', ['as'=>'createServiceCategory', 'uses'=>'ServiceController@createServiceCategory']);
	Route::get('/servicescategory', ['as'=>'servicescategory', 'uses'=>'ServiceController@getServiceCategory']);    

// -------------------------------------------like----------------------------------------------------	    