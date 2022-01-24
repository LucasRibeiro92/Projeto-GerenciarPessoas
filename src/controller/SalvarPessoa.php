<?php

namespace Lucas\Gerenciarpessoas\Controller;

use Lucas\Gerenciarpessoas\Infra\EntityManagerCreator;
use Lucas\Gerenciarpessoas\Model\Pessoa;

class SalvarPessoa implements InterfaceControlRequire
{

    private \Doctrine\ORM\EntityManagerInterface $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }

    public function processaRequisicao(): void
    {
        $nomePessoa = filter_input(INPUT_POST, 'nomePessoa', FILTER_SANITIZE_STRING);
        $emailPessoa = filter_input(INPUT_POST, 'emailPessoa', FILTER_SANITIZE_STRING);
        $senhaPessoa = filter_input(INPUT_POST, 'senhaPessoa', FILTER_SANITIZE_STRING);

        $pessoaTransitoria = new Pessoa();
        $pessoaTransitoria->setNomePessoa($nomePessoa);
        $pessoaTransitoria->setEmailPessoa($emailPessoa);
        $pessoaTransitoria->setSenhaPessoa($senhaPessoa);

        $this->entityManager->persist($pessoaTransitoria);
        $this->entityManager->flush();

        header('Location: /listar-pessoas', false, 302);
    }
}