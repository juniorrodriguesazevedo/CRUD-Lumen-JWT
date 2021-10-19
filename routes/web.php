<?php

/** @var \Laravel\Lumen\Routing\Router $router */

// API route group
$router->group(['prefix' => 'api'], function () use ($router) {
    // Matches "/api/register
    $router->post('register', 'AuthController@register');
     // Matches "/api/login
    $router->post('login', 'AuthController@login');
    // Matches "/api/profile
    $router->get('profile', 'UserController@profile');

    // Phones
    $router->get('phones', 'PhoneController@index');
    $router->post('phones', 'PhoneController@store');
    $router->get('phones/{id}', 'PhoneController@show');
    $router->put('phones/{id}', 'PhoneController@update');
    $router->post('phones/{id}', 'PhoneController@destroy');
});

$router->get('/', function () use ($router) {
    return $router->app->version();
});
