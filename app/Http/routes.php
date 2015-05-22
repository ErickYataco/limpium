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

//Route::get('/', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


Route::get('operaciones/mapa',[
    'uses'=>'Operaciones\MapaController@index',
    'permission'=>'operaciones_mapa',
    'middleware'=>['auth','acl']
] );

Route::get('operaciones/dashboard',[
    'uses'=>'Operaciones\DashboardController@index',
    'permission'=>'operaciones_dasboard',
    'middleware'=>['auth','acl']
] );

Route::get('operaciones/locales',[
    'uses'=>'Operaciones\LocalesController@index',
    'permission'=>'operaciones_locales',
    'middleware'=>['auth','acl']
] );

Route::get('operaciones/asignaciones',[
    'uses'=>'Operaciones\AsignacionesController@index',
    'permission'=>'operaciones_asignaciones',
    'middleware'=>['auth','acl']
] );

Route::post('operaciones/asignaciones',[
    'uses'=>'Operaciones\AsignacionesController@show',
    'permission'=>'operaciones_asignaciones',
    'middleware'=>['auth','acl']
] );

Route::get('operaciones/asignaciones/requerimiento/{id}',[
    'uses'=>'Operaciones\AsignacionesController@show',
    'permission'=>'operaciones_asignaciones',
    'middleware'=>['auth','acl']
] );

Route::get('rrhh/colaborador/crear',[
    'uses'=>'RRHH\PersonaController@index',
    'permission'=>'rrhh_persona',
    'middleware'=>['auth','acl']
] );

Route::get('rrhh/colaborador/editar',[
    'uses'=>'RRHH\PersonaController@edit',
    'permission'=>'rrhh_persona',
    'middleware'=>['auth','acl']
] );

Route::get('rrhh/colaborador/editar/{dni}',[
    'uses'=>'RRHH\PersonaController@update',
    'permission'=>'rrhh_persona',
    'middleware'=>['auth','acl']
] );

Route::post('rrhh/colaborador/crear',[
    'uses'=>'RRHH\PersonaController@create',
    'permission'=>'rrhh_persona',
    'middleware'=>['auth','acl']
] );

Route::get('rrhh/colaborador/buscar',[
    'uses'=>'RRHH\PersonaController@find',
    'permission'=>'rrhh_persona',
    'middleware'=>['auth','acl']
] );

Route::post('rrhh/colaborador/buscar/{dni}',[
    'uses'=>'RRHH\PersonaController@show',
    'permission'=>'rrhh_persona',
    'middleware'=>['auth','acl']
] );

Route::get('rrhh/colaborador/foto',[
    'uses'=>'RRHH\PersonaController@photo',
    'permission'=>'rrhh_persona',
    'middleware'=>['auth','acl']
] );

Route::post('rrhh/colaborador/foto',[
    'uses'=>'RRHH\PersonaController@postPhoto',
    'permission'=>'rrhh_persona',
    'middleware'=>['auth','acl']
] );

Route::get('rrhh/colaborador/foto/edit/{id}',[
    'uses'=>'RRHH\PersonaController@editPhoto',
    'permission'=>'rrhh_persona',
    'middleware'=>['auth','acl']
] );

Route::post('rrhh/colaborador/foto/upload/{id}',[
    'uses'=>'RRHH\PersonaController@postUpload',
    'permission'=>'rrhh_persona',
    'middleware'=>['auth','acl']
] );

Route::post('rrhh/colaborador/foto/face/{id}',[
    'uses'=>'RRHH\PersonaController@postProfileCrop',
    'permission'=>'rrhh_persona',
    'middleware'=>['auth','acl']
] );

Route::post('form',  array('before' => 'csrf','uses'=>'PersonaController@postProfileCrop'));

Route::get('rrhh/programacion',[
    'uses'=>'RRHH\PersonaController@index',
    'permission'=>'rrhh_persona_programacion',
    'middleware'=>['auth','acl']
] );

Route::get('comercial/contrato',[
    'uses'=>'Comercial\ContratoController@index',
    'permission'=>'rrhh_persona',
    'middleware'=>['auth','acl']
] );

Route::post('comercial/contrato',[
    'uses'=>'Comercial\ContratoController@create',
    'permission'=>'rrhh_persona',
    'middleware'=>['auth','acl']
] );

Route::get('find-empresa','Admin\EmpresaController@find');
Route::get('find-local','Admin\LocalController@find');
Route::get('find-province','RRHH\PersonaController@findProvince');
Route::get('find-district','RRHH\PersonaController@findDistrict');
Route::get('find-backups','Operaciones\AsignacionesController@findBackups');
Route::get('find-requirements','Operaciones\AsignacionesController@findRequirements');


Route::get('comercial/buscar-empresa',[
    'uses'=>'Comercial\ContratoController@find',
    'permission'=>'comercial_contrato_buscar',
    'middleware'=>['auth','acl']
] );
