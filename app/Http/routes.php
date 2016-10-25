<?php
//Protegendo uma rota
//Route::get('/os', ['middleware' => 'auth', 'uses' => 'OsController@lista']);

Route::get('/', 'OsController@index');
Route::get('/os/novo', 'OsController@formNovo');
Route::post('/os/novo', 'OsController@cadastra');
Route::post('/os/remove', 'OsController@remove');
Route::get('/os', 'OsController@lista');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
