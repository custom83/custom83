<?php


$router->get('login','PagesController@login');
$router->get('','PagesController@login');

$router->post('autenticar','PagesController@autenticarUser');
$router->post('cliente','PagesController@cliente');
