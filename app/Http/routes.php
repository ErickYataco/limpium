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

//Route::pattern('rrhh', '(?i)rrhh(?-i)');

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([ 'auth' => 'Auth\AuthController', 'password' => 'Auth\PasswordController', ]);

Route::get('soporte/mapa', [
	'uses'       => 'SupportCenter\MapsController@index',
	'permission' => 'support_maps',
	'middleware' => [ 'auth', 'acl' ]
]);

Route::get('soporte/dashboard', [
	'uses'       => 'SupportCenter\DashboardController@index',
	'permission' => 'support_dashboard',
	'middleware' => [ 'auth', 'acl' ]
]);

Route::get('soporte/locales', [
	'uses'       => 'SupportCenter\LocalesController@index',
	'permission' => 'support_workplaces',
	'middleware' => [ 'auth', 'acl' ]
]);

Route::get('soporte/backups', [
	'uses'       => 'SupportCenter\BackupsController@index',
	'permission' => 'support_backups',
	'middleware' => [ 'auth', 'acl' ]
]);

Route::post('soporte/backups', [
	'uses'       => 'SupportCenter\BackupsController@create',
	'permission' => 'support_backups',
	'middleware' => [ 'auth', 'acl' ]
]);

Route::get('soporte/backups/requerimiento/{id}', [
	'uses'       => 'SupportCenter\BackupsController@show',
	'permission' => 'support_backups',
	'middleware' => [ 'auth', 'acl' ]
]);

Route::get('rrhh/colaborador/crear',
	[ 'uses' => 'RRHH\WorkersController@index', 'permission' => 'rrhh_worker_add', 'middleware' => [ 'auth', 'acl' ] ]);

Route::post('rrhh/colaborador/crear', [
	'uses'       => 'RRHH\WorkersController@create',
	'permission' => 'rrhh_worker_add',
	'middleware' => [ 'auth', 'acl' ]
]);

Route::get('rrhh/colaborador/editar',
	[ 'uses' => 'RRHH\WorkersController@edit', 'permission' => 'rrhh_worker_edit', 'middleware' => [ 'auth', 'acl' ] ]);

Route::get('rrhh/colaborador/editar/{dni}', [
	'uses'       => 'RRHH\WorkersController@update',
	'permission' => 'rrhh_worker_edit',
	'middleware' => [ 'auth', 'acl' ]
]);

/*Route::get('rrhh/colaborador/buscar',['uses'=>'RRHH\WorkersController@find','permission'=>'rrhh_persona', 'middleware'=>['auth','acl']]);

Route::post('rrhh/colaborador/buscar/{dni}',[ 'uses'=>'RRHH\WorkersController@show','permission'=>'rrhh_persona','middleware'=>['auth','acl']]);*/

Route::get('rrhh/colaborador/foto', [
	'uses'       => 'RRHH\WorkersController@photo',
	'permission' => 'rrhh_workers_photo_edit',
	'middleware' => [ 'auth', 'acl' ]
]);

Route::get('rrhh/colaborador/foto/{id}', [
	'uses'       => 'RRHH\WorkersController@editPhoto',
	'permission' => 'rrhh_workers_photo_edit',
	'middleware' => [ 'auth', 'acl' ]
]);

Route::post('rrhh/colaborador/foto/upload/{id}', [
	'uses'       => 'RRHH\WorkersController@postUpload',
	'permission' => 'rrhh_workers_photo_edit',
	'middleware' => [ 'auth', 'acl' ]
]);

Route::post('rrhh/colaborador/foto/face/{id}', [
	'uses'       => 'RRHH\WorkersController@postProfileCrop',
	'permission' => 'rrhh_workers_photo_edit',
	'middleware' => [ 'auth', 'acl' ]
]);

Route::get('rrhh/asignacion', [
	'uses'       => 'RRHH\AssignmentsController@index',
	'permission' => 'rrhh_workers_assignment_add',
	'middleware' => [ 'auth', 'acl' ]
]);

Route::get('rrhh/asignacion/requerimiento/{id}', [
	'uses'       => 'RRHH\AssignmentsController@show',
	'permission' => 'rrhh_workers_assignment_add',
	'middleware' => [ 'auth', 'acl' ]
]);

Route::get('comercial/contrato', [
	'uses'       => 'Comercial\ContractsController@index',
	'permission' => 'rrhh_contracts_add',
	'middleware' => [ 'auth', 'acl' ]
]);

Route::post('comercial/contrato', [
	'uses'       => 'Comercial\ContractsController@create',
	'permission' => 'rrhh_contracts_add',
	'middleware' => [ 'auth', 'acl' ]
]);

Route::get('admin/empresa', [
	'uses'       => 'Admin\EnterprisesController@index',
	'permission' => 'admin_enterprises_add',
	'middleware' => [ 'auth', 'acl' ]
]);

Route::post('admin/empresa', [
	'uses'       => 'Admin\EnterprisesController@create',
	'permission' => 'admin_enterprises_add',
	'middleware' => [ 'auth', 'acl' ]
]);

Route::get('admin/locales', [
	'uses'       => 'Admin\WorkplacesController@index',
	'permission' => 'rrhh_workplaces_add',
	'middleware' => [ 'auth', 'acl' ]
]);

Route::post('admin/locales', [
	'uses'       => 'Admin\WorkplacesController@create',
	'permission' => 'rrhh_workplaces_add',
	'middleware' => [ 'auth', 'acl' ]
]);

Route::get('find-empresa', 'Admin\EnterprisesController@find');
Route::get('find-local', 'Admin\WorkplacesController@find');
Route::get('find-province', 'RRHH\WorkersController@findProvince');
Route::get('find-district', 'RRHH\WorkersController@findDistrict');
Route::get('find-backups', 'SupportCenter\BackupsController@findBackups');
Route::get('find-requirements', 'SupportCenter\BackupsController@findRequirements');
Route::get('find-requirements-assignment', 'RRHH\AssignmentsController@findRequirements');
Route::get('find-workers', 'RRHH\AssignmentsController@findWorkers');
Route::get('find-worker', 'RRHH\WorkersController@findWorker');
Route::get('comercial/buscar-empresa', [
	'uses'       => 'Comercial\ContratoController@find',
	'permission' => 'comercial_contrato_buscar',
	'middleware' => [ 'auth', 'acl' ]
]);
