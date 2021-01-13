<?php
require 'vendor/autoload.php';
\App\Services\ViewService::launch();
\App\Services\ViewService::launchTwig();

include_once 'config/routes.php';
\App\Services\Router::run();
