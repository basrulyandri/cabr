<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/modul',function(){
	return "Halaman Modul";
})->name('modul.upload');

Route::get('/', [
	'as' => 'home',
	'uses' => function () {
    			return view('welcome');
	},
	]
);

Route::group(['middleware' => 'rbac'],function(){
	Route::get('/modul',function(){
		return "Halaman Modul";
	})->name('modul.upload');
	
	Route::get('roles',[
		'uses' => 'RoleController@index',
		'as' => 'roles.index',
	]);
	Route::get('dashboard', [
		'uses' => 'DashboardController@index',
		'as' => 'dashboard.index',
	]);	

	Route::get('users',[
		'uses' =>  'UserController@index',
		'as' => 'users.index'
	]);

	Route::get('user/add',[
		'uses' => 'UserController@add',
		'as' => 'user.add',
	]);

	Route::post('user/create',[
		'uses' => 'UserController@create',
		'as' => 'user.create'
	]);
	Route::get('user/{user}/edit', [
			'uses' => 'UserController@edit',
			'as' => 'user.edit',
		]);
	Route::post('user/{user}/update', [
			'uses' => 'UserController@update',
			'as' => 'user.update',
		]);

	Route::post('user/updatephoto',[
		'uses' => 'UserController@updatePhoto',
		'as' => 'user.updatephoto'
	]);
	Route::get('user/{username}',[
		'uses' => 'UserController@profile',
		'as' => 'user.profile'
	]);

	Route::get('user/{user}/delete', [
			'uses' => 'UserController@delete',
			'as' => 'user.delete',
		]);

	Route::get('role/add',[
		'uses' => 'RoleController@add',
		'as' => 'role.add',
	]);

	Route::post('role/create',[
		'uses' => 'RoleController@create',
		'as' => 'role.create',
	]);
	Route::get('role/{id}/edit',[
		'uses' => 'RoleController@edit',
		'as' => 'role.edit'
	]);

	Route::post('role/{id}/update',[
		'uses' => 'RoleController@update',
		'as' => 'role.update'
	]);

	Route::get('role/{id}/delete',[
		'uses' => 'RoleController@delete',
		'as' => 'role.delete'
	]);	

	Route::get('permissions',[
		'uses' => 'PermissionController@index',
		'as' => 'permissions.index'
	]);

	Route::get('permission/add',[
		'uses' => 'PermissionController@add',
		'as' => 'permission.add'
	]);

	Route::post('permission/create',[
		'uses' => 'PermissionController@create',
		'as' => 'permission.create',
	]);

	Route::get('/permission/{id}/edit',[
		'uses' => 'PermissionController@edit',
		'as' => 'permission.edit',
	]);

	Route::post('permission/{id}/update',[
		'uses' => 'PermissionController@update',
		'as' => 'permission.update',
	]);

	Route::get('permission/{id}/delete',[
		'uses' => 'PermissionController@delete',
		'as' => 'permission.delete',
	]);
});

Route::get('login',[
	'uses' => 'AuthController@login',
	'as' => 'auth.login',
	'middleware' => 'guest',
]);

Route::post('dologin',[
	'uses' => 'AuthController@dologin',
	'as' => 'auth.dologin',
]);

Route::get('logout',[
	'uses' => 'AuthController@logout',
	'as' => 'auth.logout',
]);
