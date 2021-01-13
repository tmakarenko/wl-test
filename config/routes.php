<?php
use \App\Services\Router;


Router::add('/',function(){
    \App\Services\ViewService::$smarty->display('index.tpl');
});

Router::add('/a',['HomeController', 'test']);

/**
 * TODO
 */
Router::add('/public/css',['HomeController', 'test']);
Router::add('/public/js',['HomeController', 'test']);



