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
	// return View::make('pages.front.home.home');
		return View::make('pages.front.bdyd_2015.audisi_dan_lomba.audisi_dan_lomba');

});

//BDYD 2015
Route::get('/bdyd-2015', function()
{
	return View::make('pages.front.bdyd-2015.bdyd-2015');
	//pre-event 
}); 

//audisi_dan_lomba
Route::get('/audisi_dan_lomba', function()
{
	return View::make('pages.front.bdyd_2015.audisi_dan_lomba.audisi_dan_lomba');
}); 


//About BDYD 2015
Route::get('/about-bdyd', function()
{
	return View::make('pages.front.about-bdyd.about-bdyd');
});

//Past BDYD 2015
Route::get('/past-bdyd', function()
{
	return View::make('pages.front.past-bdyd.past-bdyd');
});

//Sponsor dan Donatur
Route::get('/sponsor', function()
{
	return View::make('pages.front.sponsor.sponsor');
});

//Gallery
Route::get('/gallery', function()
 {
	return View::make('pages.front.gallery.gallery');
});

/*
|--------------------------------------------------------------------------
|	Pendaftaran
|--------------------------------------------------------------------------
*/

//page pendaftaran 
Route::get('/pendaftaran', ['as'=>'tamu.page_pendaftaran', 'uses'=>'PendaftaranFrontController@view_pendaftaran']);

//funtion ke engine
 Route::post('/post_pendaftaran', ['as'=>'tamu.post_pendaftaran', 'uses'=>'PesertaController@create_user']);


/*
|--------------------------------------------------------------------------
|	Konfirmasi
|--------------------------------------------------------------------------
*/

// page konfirmasi
Route::get('/konfirmasi', ['as'=>'tamu.page_konfirmasi', 'uses'=>'PendaftaranFrontController@view_konfirmasi']);


