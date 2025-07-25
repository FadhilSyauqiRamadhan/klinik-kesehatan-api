<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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


$router->group(['prefix' => 'api/klinik'], function () use ($router) {
    $router->get('/', 'KlinikController@index');
    $router->get('/{id}', 'KlinikController@show');
    $router->post('/', 'KlinikController@store');
    $router->put('/{id}', 'KlinikController@update');
    $router->delete('/{id}', 'KlinikController@destroy');
});
