<?php

use Lucas\Gerenciarpessoas\Controller\FormularioNovaPessoa;
use Lucas\Gerenciarpessoas\Controller\InterfaceControlRequire;
use Lucas\Gerenciarpessoas\Controller\ListarPessoas;
use Lucas\Gerenciarpessoas\Controller\SalvarPessoa;
use Lucas\Gerenciarpessoas\Model\Pessoa;

require __DIR__ . '/../vendor/autoload.php';

$urlPath = $_SERVER['PATH_INFO'];


switch ($urlPath) {
    case '/listar-pessoas' :
        (new ListarPessoas())->processaRequisicao();
        break;
    case '/nova-pessoa' :
        (new FormularioNovaPessoa())->processaRequisicao();
        break;
    case '/salvar-pessoa' :
        (new SalvarPessoa())->processaRequisicao();
        break;
    default:
        http_response_code(404);
        break;
}