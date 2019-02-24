<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->post('/Siswa', 'SiswaController@create');
$router->get('/Siswa', 'SiswaController@read');
$router->post('/Siswa/{id}','SiswaController@update');
$router->delete('/Siswa/{id}', 'SiswaController@delete');
$router->post('/Kelas', 'KelasController@create');
$router->get('/Kelas', 'KelasController@read');
$router->post('/Kelas/{id}', 'KelasController@update');
$router->delete('/Kelas/{id}', 'KelasController@delete');