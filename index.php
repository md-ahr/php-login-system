<?php

include_once './router/Request.php';
include_once './router/Router.php';

$router = new Router(new Request);

$router->get('/', function() {
    return <<<HTML
  <h1>Hello world</h1>
HTML;
});
