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

$router->group(['prefix' => 'api'], function () use ($router) {
    /*$router->get('grupo-sanguineo',  ['uses' => 'GrupoSanguineoController@showAllGrupoSanguineo']);
  
    $router->get('grupo-sanguineo/{id}', ['uses' => 'GrupoSanguineoController@showOneGrupoSanguineo']);
  
    $router->post('grupo-sanguineo', ['uses' => 'GrupoSanguineoController@create']);
  
    $router->delete('grupo-sanguineo/{id}', ['uses' => 'GrupoSanguineoController@delete']);
  
    $router->put('grupo-sanguineo/{id}', ['uses' => 'GrupoSanguineoController@update']);*/
});