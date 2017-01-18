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

//To debuge MySQL querys use these code
//DB::listen(function($query) {
//
//    var_dump($query->sql, $query->bindings);
//});

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/', 'ProfileController@showProfile');


//Profile page
Route::get('/home', 'ProfileController@showProfile');
Route::post('/home', 'ProfileController@saveProfile');

Route::get('/profile', 'ProfileController@showProfile');
Route::get('/profile/{id}', 'ProfileController@showProfile')->where('id', '[0-9]+'); //old route

Route::post('/profile', 'ProfileController@showProfile');
Route::post('/upload', 'ProfileController@upload'); //used for uploading pictures


Route::post('savesalary', ['as'=>'savesalary', 'uses'=>'ProfileController@saveSalary']);
Route::post('savesettings', ['as'=>'savesettings', 'uses'=>'ProfileController@saveSettings']);

Route::post('editdata', ['as'=>'editdata', 'uses'=>'ProfileController@inlineEdit']);
Route::get('editdata', ['as'=>'editdata', 'uses'=>'ProfileController@inlineEdit']);


//inline routes
Route::post('editsalary', ['as'=>'editsalary', 'uses'=>'UserListController@editSalary']);
Route::post('editposition', ['as'=>'editposition', 'uses'=>'UserListController@editPosition']);
Route::post('editgroup', ['as'=>'editgroup', 'uses'=>'UserListController@editGroup']);

//bulk deleting records
Route::delete('mass_delete', 'UserListController@massDelete');
Route::delete('/profile/mass_delete', 'UserListController@massDelete');



//UserList page
Route::get('/userlist', 'UserListController@showUsers');

Route::get('/settings', 'SettingsController@showPositions');
Route::post('onlypositions', ['as'=>'onlypositions', 'uses'=>'SettingsController@changePositionName']);
Route::post('onlygroups', ['as'=>'onlygroups', 'uses'=>'SettingsController@changeGroupName']);

Route::post('addposition', ['as'=>'addposition', 'uses'=>'SettingsController@addPosition']);
Route::post('addgroup', ['as'=>'addgroup', 'uses'=>'SettingsController@addGroup']);

Route::delete('mass_delete_positions', 'SettingsController@balkDeletePositions');
Route::delete('mass_delete_groups', 'SettingsController@balkDeleteGroups');



