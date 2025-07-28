<?php
$router->get('/', 'ProdutoController@index');
$router->get('/login', 'AuthController@loginForm');
$router->post('/login', 'AuthController@login');
$router->get('/logout', 'AuthController@logout');
$router->get('/register', 'AuthController@registerForm');
$router->post('/register', 'AuthController@register');
