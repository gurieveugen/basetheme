<?php defined('DS') or die('No direct script access.');

Route::get('home', array(array('front'), 'uses' => 'HomeController@index'));
Route::get('page', 'PageController@index');
Route::get('404', 'NotFoundController@index');
Route::get('archive', 'ArchiveController@index');
Route::get('single', 'SingleController@index');
Route::get('search', function(){
	return View::make('pages.search', array('search' => $_GET['s']));
});