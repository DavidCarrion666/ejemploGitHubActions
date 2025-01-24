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

$router->group(['prefix' => 'publishers'], function () use ($router) {
    $router->get('/', ['uses' => 'PublisherController@index']);
    $router->get('/{id}', ['uses' => 'PublisherController@show']);
    $router->post('/', ['uses' => 'PublisherController@store']);
    $router->put('/{id}', ['uses' => 'PublisherController@update']);
    $router->delete('/{id}', ['uses' => 'PublisherController@destroy']);
});
