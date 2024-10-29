<?php

namespace Middleware;

include dirname(__DIR__, 1) . '/vendor/autoload.php';

use App\Entity\Vaga_Nivel;

switch ($_GET['acao']) {
    case 'todos':
        echo json_encode(Vaga_Nivel::obterVaganiveis());
        break;
    
    case 'excluir':
        $obj = new Vaga_Nivel();
        $value = "codigo = {$_GET['codigo']}";
        echo json_encode($obj->excluir($value));

        break;
    
    
}
