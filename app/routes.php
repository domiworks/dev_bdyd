<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Home
Route::get('/', function()
{
	return View::make('pages.front.home.home');
});

//BDYD 2015
Route::get('/bdyd-2015', function()
{
	return View::make('pages.front.bdyd_2015.home');
});

//About BDYD 2015
Route::get('/about-bdyd', function()
{
	return View::make('pages.front.home.home');
});

//Past BDYD 2015
Route::get('/past-bdyd', function()
{
	return View::make('pages.front.home.home');
});

//Sponsor dan Donatur
Route::get('/sponsor-donatur', function()
{
	return View::make('pages.front.home.home');
});

//Gallery
Route::get('/gallery', function()
{
	return View::make('pages.front.home.home');
});

/*
|--------------------------------------------------------------------------
|	Pendaftaran
|--------------------------------------------------------------------------
*/

//page pendaftaran 
Route::get('/pendaftaran', ['as'=>'categoryList', 'uses'=>'PendaftaranFrontController@view_pendaftaran']);

//funtion ke engine
// Route::post('/post_pendaftaran', ['as'=>'tamu.post_pendaftaran', 'uses'=>'CategoryListManagementController@catList']);


