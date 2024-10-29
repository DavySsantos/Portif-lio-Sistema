<?php
include dirname(__DIR__, 2) . '/vendor/autoload.php';

use App\Entity\Empresa_Porte;

$status = $_GET['acao'];
$porteEmp = new Empresa_Porte();

switch ($status) {
    case 'inserir':
if (isset($_POST['cadastrar'])) {
    $obj = new Empresa_Porte();
    $obj->inserir(["nome" => $_POST['empporte']]);

    header("location: /administracao/porteempresa/lista.php?status=success");
}
break;
    
case 'alterar':
    if (isset($_POST['cadastrar'])) {
        $obj = new Empresa_Porte();

        $where = "codigo = {$_GET['id']}";

        $values = [
            'nome' => $_POST['empporte']
        ];

        $obj->atualizar($where, $values);
    
        header("location: /administracao/porteempresa/lista.php?status=success");
        exit; 
    }
    $where = [0 => "codigo = {$_GET['id']}"];
    $porteEmp = Empresa_Porte::obterEmpresaporte($where);
    break;


default:
    header("location: /administracao/porteempresa/lista.php"); 
}

include dirname(__DIR__, 2) . '/includes/cabecalho.php';
include dirname(__DIR__, 2) . '/includes/administracao/porteempresa/cadastro.php';
include dirname(__DIR__, 2) . '/includes/rodape.php';
