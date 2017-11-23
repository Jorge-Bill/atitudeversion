<?php

$filename = __DIR__.preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);

//Verifica se a requisição realmente é do index.php
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}

require_once __DIR__.'/../src/app.php';

$app->mount('/', new Controller\frontController);

$app->run();