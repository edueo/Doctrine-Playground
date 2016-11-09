<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/config.php';

// Doctrine Entity Manager
$entitiesPath = array(__DIR__.'/Blog/Entity');
$config = Setup::createAnnotationMetadataConfiguration($entitiesPath, $dev);
$entityManager = EntityManager::create($dbParams, $config);
