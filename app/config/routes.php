<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/** @var object $router **/

$router->post('/api/register', 'ApiController::register');
$router->post('/api/login', 'ApiController::login');
$router->post('/api/refresh', 'ApiController::refresh');
$router->post('/api/logout', 'ApiController::logout');
$router->options('/api/register', 'ApiController::preflight');
$router->options('/api/login', 'ApiController::preflight');
$router->options('/api/refresh', 'ApiController::preflight');
$router->options('/api/logout', 'ApiController::preflight');
$router->options('/api/products', 'ApiController::preflight');
$router->options('/api/products/{id}', 'ApiController::preflight')->where_number('id');
$router->get('/api/products', 'ApiController::products');
$router->post('/api/products', 'ApiController::create_product');
$router->put('/api/products/{id}', 'ApiController::update_product')->where_number('id');
$router->patch('/api/products/{id}', 'ApiController::update_product')->where_number('id');
$router->delete('/api/products/{id}', 'ApiController::delete_product')->where_number('id');