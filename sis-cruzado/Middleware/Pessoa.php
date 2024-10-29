<?php

namespace Middleware;

include dirname(__DIR__, 1) . '/vendor/autoload.php';

use App\Entity\Pessoa;

switch ($_GET['acao']) {
    case 'todos':
        echo json_encode(Pessoa::obterPessoas());
        break;
    
    case 'excluir':
        $obj = new Pessoa();
        $value = "cpfcnpj = {$_GET['codigo']}";
        echo json_encode($obj->excluir($value));

        break;
    
    
}
