<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once __DIR__.'/../src/app.php';

// Chama a DotEnv onde se obtem as configuracoes do projeto
(new Dotenv\Dotenv(__DIR__.'/../'))->load();

$app->register(new Silex\Provider\DoctrineServiceProvider(), [
    'dbs.options' => 
    [
        'atitudeversion_default' => 
        [
            'driver'   => 'pdo_mysql',
            'host'     => getenv('DB_HOST'),
            'dbname'   => getenv('DB_NAME'),
            'user'     => getenv('DB_USER'),
            'password' => getenv('DB_PASS'),
            'charset'  => getenv('DB_CHARSET'),
        ]
    ],
]);
   

/*$paths = array("../src/Model/Entities/Posts");
$isDevMode = false;
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
/*$driverImpl = $config->newDefaultAnnotationDriver('src/Model/Entities/Posts');
$config->setProxyDir('src/Model/Entities/Posts');
$config->setProxyNamespace('src\Model\Entities\Posts');
$config->setAutoGenerateProxyClasses(true);*/

//Conexão Default do projeto Atitude Version
/*$entityManager = EntityManager::create($app['dbs.options']['atitudeversion_default'], $config);
$app['entityManager'] = $entityManager;*/