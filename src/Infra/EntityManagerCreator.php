<?php

namespace Lucas\Gerenciarpessoas\Infra;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManagerCreator
{
    /**
     * @throws \Doctrine\ORM\ORMException
     */
    public function getEntityManager(): EntityManagerInterface
    {
        $paths = [__DIR__ . '/../Model'];
        $isDevMode = false;

        $dbParams = array(
            'url' => 'mysql://root:1234ab@localhost:3306/gerenciadorpessoas',
        );

        $config = Setup::createAnnotationMetadataConfiguration(
            $paths,
            $isDevMode
        );

        return EntityManager::create($dbParams, $config);
    }
}