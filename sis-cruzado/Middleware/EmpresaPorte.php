<?php

namespace Middleware;

include dirname(__DIR__, 1) . '/vendor/autoload.php';

use App\Entity\Empresa_Porte;

switch ($_GET['acao']) {
    case 'todos':
        echo json_encode(Empresa_Porte::obterEmpresaportes());
        break;
    
    case 'excluir':
        $obj = new Empresa_Porte();
        $value = "codigo = {$_GET['codigo']}";
        echo json_encode($obj->excluir($value));

        break;
    
    
}
