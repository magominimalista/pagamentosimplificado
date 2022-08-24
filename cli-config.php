<?php

require 'vendor/autoload.php';

use Doctrine\Migrations\Configuration\EntityManager\ExistingEntityManager;
use Doctrine\Migrations\DependencyFactory;
use Doctrine\Migrations\Configuration\Migration\PhpFile;
use Src\Helper\EntitymanagerCreator;

$config = new PhpFile(__DIR__.'/migrations.php'); // Or use one of the Doctrine\Migrations\Configuration\Configuration\* loaders

$entityManager = EntitymanagerCreator::createEntityManager();

return DependencyFactory::fromEntityManager($config, new ExistingEntityManager($entityManager));