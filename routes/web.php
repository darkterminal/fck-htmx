<?php

$app->router->get('/', 'SiteController@home');
$app->router->get('/component', 'SiteController@component');
$app->router->post('/set-theme', 'SiteController@setTheme');

$app->router->get('/counter', 'SiteController@counter');
$app->router->post('/counter/{counterType}', 'SiteController@counter');

$app->router->get('/login', 'AuthController@login');
$app->router->post('/login', 'AuthController@login');

$app->router->get('/register', 'AuthController@register');
$app->router->post('/register', 'AuthController@register');

$app->router->get('/profile', 'AuthController@profile');

$app->router->get('/logout', 'AuthController@logout');
