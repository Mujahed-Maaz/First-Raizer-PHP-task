<?php


require 'core/Router.php';

require 'routes.php';

$router = new Router;

$uri = trim(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
);

require $router->direct($uri);
