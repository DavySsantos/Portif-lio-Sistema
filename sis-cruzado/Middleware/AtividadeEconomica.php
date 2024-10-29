<?php

namespace Middleware;

include dirname(__DIR__, 1) . '/vendor/autoload.php';

use App\Entity\Atividade_Economica;

switch ($_GET['acao']) {
    case 'todos':
        echo json_encode(Atividade_Economica::obterAtividadeseconomicas());
        break;
    
    case 'excluir':
        $obj = new Atividade_Economica();
        $value = "codigo = {$_GET['codigo']}";
        echo json_encode($obj->excluir($value));

        break;
    
    
}
