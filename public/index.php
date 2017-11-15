<?php

$filename = __DIR__.preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);

<<<<<<< HEAD
if (php_sapi_name() === 'cli-server' && is_file($filename)) {//Verifica se a requisição realmente é do index.php
    return false;
}
=======
use Atitude\Model\Database\Database;
use Atitude\Model\Controller\Welcome;
>>>>>>> d8a680029a300f009be27e1565cd9889b5a506ff

require_once __DIR__.'/../src/app.php';

<<<<<<< HEAD
$app->mount('/', new Controller\frontController);
=======
try {
    $adicionar = $conn->inserir('pessoas', 'super man');
//  $editar = $conn->editar('pessoas', 3, 'teste');
//  $remove = $conn->remover('pessoas',7 );
//  $listar = $conn->findAll('pessoas');
}

catch (Exception $e)
{
    echo $e->getCode();
}
>>>>>>> d8a680029a300f009be27e1565cd9889b5a506ff

$app->run();