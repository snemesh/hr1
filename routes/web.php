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

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/', 'ProfileController@showProfile');


Route::get('/home', 'ProfileController@showProfile');
Route::post('/home', 'ProfileController@saveProfile');

Route::get('/profile', 'ProfileController@showProfile');
//Route::get('/profile/{id}', 'ProfileController@showProfile');

Route::get('/profile/{id}', 'ProfileController@showUserProfile')->where('id', '[0-9]+');;


Route::get('/userlist', 'UserListController@showUsers');

//Route::get('upload/{userid}', ['as'=>'uploading', 'uses'=>'ProfileController@getResizeImage']);
Route::post('upload', ['as'=>'uploading', 'uses'=>'ProfileController@upload']);

//
//Route::post('saveuser', ['as'=>'saveuserdata', 'uses'=>'ProfileController@saveuserdata']);
//Route::post('saveusergrouporid', ['as'=>'saveusergrouporid', 'uses'=>'ProfileController@SaveUserGroupOrPosition']);
//
//Route::post('newsalary', ['as'=>'changesalary', 'uses'=>'ProfileController@NewSalary']);
//Route::post('userstatus', ['as'=>'userstatus', 'uses'=>'ProfileController@UserStatus']);
//
//Route::post('saveMainProfileInfo', ['as'=>'saveMainProfileInfo', 'uses'=>'ProfileController@saveMainProfileInfo']);
//Route::get('saveMainProfileInfo', ['as'=>'saveMainProfileInfo', 'uses'=>'ProfileController@saveMainProfileInfo']);

