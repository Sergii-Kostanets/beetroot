<?php
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = [
    'src/Models',
];
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'host'     => getenv('DB_DATABASE'),
    'user'     => getenv('DB_ROOT_USER'),
    'password' => getenv('DB_ROOT_PASS'),
    'dbname'   => getenv('DB_DATABASE_NAME'),
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
global $entityManager;
$entityManager = EntityManager::create($dbParams, $config);

function getEntityManager(): EntityManager {
    global $entityManager;
    return $entityManager;
}