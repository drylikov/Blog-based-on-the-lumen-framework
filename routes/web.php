<?php

use Laravel\Lumen\Routing\Router;

/* @var Router $router */
$router->group(['namespace' => 'Blog'], function (Router $app) {
    $app->get('/', ['as' => 'index', 'uses' => 'IndexController@show']);
});
