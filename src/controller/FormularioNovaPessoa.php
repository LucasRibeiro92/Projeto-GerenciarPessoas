<?php

namespace Lucas\Gerenciarpessoas\Controller;

class FormularioNovaPessoa implements InterfaceControlRequire
{

    public function processaRequisicao(): void
    {
        require __DIR__ . '/../../view/pessoa/formulario-nova-pessoa.php';
    }
}