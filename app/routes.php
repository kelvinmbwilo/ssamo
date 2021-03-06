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

Route::get('/', function()
{
	return View::make('ssamo.home');
});
Route::get('ssamo', function()
{
	return View::make('ssamo.home');
});

Route::get('ssamo/about', function()
{
	return View::make('ssamo.about');
});

Route::get('ssamo/services', function()
{
	return View::make('ssamo.service');
});

Route::get('ssamo/contacts', function()
{
	return View::make('ssamo.contact');
});

Route::get('ssamo/portfolio', function()
{
	return View::make('ssamo.portfolio');
});

Route::get('about', function()
{
	return View::make('about');
});

Route::get('admin', function()
{
	return View::make('admin.master');
});

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
/**
 * Managing Category actions
 * Directing routes to correct controllers
 * using CategoryController
 */
//////////////////////////////////////////////////////////////////////////////////////////////////////////////


//display a form to add new vaccine
Route::get('admin/category/add',array('uses'=>'CategoryController@create'));

//display a list of vaccines
Route::get('admin/category/list',array('uses'=>'CategoryController@lists'));

//adding new facility
Route::post('admin/category/add',array('uses'=>'CategoryController@store'));

//viewing index page
Route::get('admin/category',array('uses'=>'CategoryController@index'));

//display a form to edit facility information
Route::get('admin/category/edit/{id}',array('uses'=>'CategoryController@edit'));

//editng facility information
Route::post('admin/category/edit/{id}',array('uses'=>'CategoryController@update'));

//deleting facility
Route::post('admin/category/delete/{id}',array('uses'=>'CategoryController@destroy'));

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
/**
 * Managing Pictures actions
 * Directing routes to correct controllers
 * using PictureController
 */
//////////////////////////////////////////////////////////////////////////////////////////////////////////////


//display a form to add new vaccine
Route::get('admin/picture/add',array('uses'=>'PictureController@create'));

//display a list of vaccines
Route::get('admin/picture/list',array('uses'=>'PictureController@lists'));

//adding new facility
Route::post('admin/picture/add',array('uses'=>'PictureController@store'));

//viewing index page
Route::get('admin/picture',array('uses'=>'PictureController@index'));

//display a form to edit facility information
Route::get('admin/picture/edit/{id}',array('uses'=>'PictureController@edit'));

//editng facility information
Route::post('admin/picture/edit/{id}',array('uses'=>'PictureController@update'));

//deleting facility
Route::post('admin/picture/delete/{id}',array('uses'=>'PictureController@destroy'));

//////////////////////////////////////////////////////////////////////////////////////////////////////////////
/**
 * Managing Portfolio actions
 * Directing routes to correct controllers
 * using PictureController
 */
//////////////////////////////////////////////////////////////////////////////////////////////////////////////


//display a form to add new vaccine
Route::get('admin/portfolio/add',array('uses'=>'PortfolioController@create'));

//display a list of vaccines
Route::get('admin/portfolio/list',array('uses'=>'PortfolioController@lists'));

//adding new facility
Route::post('admin/portfolio/add',array('uses'=>'PortfolioController@store'));

//viewing index page
Route::get('admin/portfolio',array('uses'=>'PortfolioController@index'));

//display a form to edit facility information
Route::get('admin/portfolio/edit/{id}',array('uses'=>'PortfolioController@edit'));

//editng facility information
Route::post('admin/portfolio/edit/{id}',array('uses'=>'PortfolioController@update'));

//deleting facility
Route::post('admin/portfolio/delete/{id}',array('uses'=>'PortfolioController@destroy'));
