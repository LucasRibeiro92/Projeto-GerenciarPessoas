<?php

require_once __DIR__ . '/vendor/autoload.php';

use Lucas\Gerenciarpessoas\Infra\EntityManagerCreator;

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet(
    (new EntityManagerCreator())->getEntityManager()
);