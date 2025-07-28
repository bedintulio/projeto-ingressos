<?php
$router->get('/', 'ProdutoController@index');
$router->get('/login', 'AuthController@loginForm');
$router->post('/login', 'AuthController@login');
$router->get('/logout', 'AuthController@logout');
$router->get('/register', 'AuthController@registerForm');
$router->post('/register', 'AuthController@register');
$router->get('/produtos', 'ProdutoController@index');
$router->get('/produtos/create', 'ProdutoController@createForm');
$router->post('/produtos/store', 'ProdutoController@store');
$router->get('/produtos/edit', 'ProdutoController@editForm');
$router->post('/produtos/update', 'ProdutoController@update');
$router->post('/produtos/delete', 'ProdutoController@delete');
$router->get('/carrinho', 'CompraController@carrinho');
$router->post('/carrinho/add', 'CompraController@addCarrinho');
$router->post('/carrinho/finalizar', 'CompraController@finalizar');
$router->get('/historico', 'CompraController@historico');
$router->get('/pdf', 'CompraController@pdf');
