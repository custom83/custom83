<?php

// routers admin
if(isset($_SESSION['logado'])){
    $router->get('dashboard-admin','PagesController@admin');
    $router->get('dashboard-admin-pessoa-fisica','PagesController@pessoaFisica');
    $router->get('dashboard-admin-pessoa-juridica','PagesController@pessoaJuridica');
    $router->get('dashboard-admin-usuarios-desabilitados','PagesController@desabilitados');
    $router->get('dashboard-admin-listagem-usuarios','PagesController@listUserSimple');
    $router->get('logout','PagesController@logoutUser');
}

$router->get('','PagesController@login');
$router->get('login','PagesController@login');
$router->get('register','PagesController@register');
$router->get('registropessoafisica','PagesController@registerPf');
$router->get('registropessoajuridica','PagesController@registerPj');

$router->post('autenticar','PagesController@autenticarUser');
$router->post('register-user','PagesController@registrarUser');
$router->post('assinante','PagesController@assinarUser');

$router->get('pos-register','PagesController@posRegister');
