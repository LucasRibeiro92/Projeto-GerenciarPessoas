<?php

namespace Lucas\Gerenciarpessoas\Controller;

use Lucas\Gerenciarpessoas\Infra\EntityManagerCreator;
use Lucas\Gerenciarpessoas\Model\Pessoa;

class ListarPessoas implements InterfaceControlRequire
{

    private $repositorioDePessoas;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDePessoas = $entityManager
            ->getRepository(Pessoa::class);
    }

    public function processaRequisicao(): void
    {
        $pessoas = $this->repositorioDePessoas->findAll();
        //$titulo = 'Lista de Cursos';
        require __DIR__ . '/../../view/pessoa/listar-pessoas.php';
    }
}