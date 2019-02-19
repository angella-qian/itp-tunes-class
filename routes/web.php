<?php

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

Route::middleware(['authenticated'])->group(function() {
	Route::get('/admin/profile', 'AdminController@index');
	
	Route::get('/admin/settings', 'AdminController@settings');
	Route::post('/admin/settings', 'AdminController@toggle');

	Route::get('/maintenance', 'AdminController@maintenance');
});

Route::middleware(['maintenancemode'])->group(function() {

	Route::get('/invoices', 'InvoicesController@index');

	// Route -> Controller -> load view
	Route::get('/', 'LoginController@index');

	Route::get('/playlists/new', 'PlaylistController@create');
	Route::get('/playlists/{id}', 'PlaylistController@index');
	Route::post('/playlists', 'PlaylistController@store');

	Route::get('/signup', 'SignUpController@index');
	Route::post('/signup', 'SignUpController@signup');
});