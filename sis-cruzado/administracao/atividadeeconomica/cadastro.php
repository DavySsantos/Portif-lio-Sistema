<?php
include dirname(__DIR__, 2) . '/vendor/autoload.php';

use App\Entity\Atividade_Economica;

$status = $_GET['acao']; // inserir/alterar/excluir
$atividadeEcon = new Atividade_Economica();

switch ($status) {
    case 'inserir':
        if (isset($_POST['cadastrar'])) {
            $obj = new Atividade_Economica();
            $obj->inserir(["nome" => $_POST['atividadeeco']]);
            header("location: /administracao/atividadeeconomica/lista.php?status=success"); 
        }
        break;
    
    case 'alterar':
        if (isset($_POST['cadastrar'])) {
            $obj = new Atividade_Economica();

            $where = "codigo = {$_GET['id']}";

            $values = [
                'nome' => $_POST['atividadeeco']
            ];

            $obj->atualizar($where, $values);
        
            header("location: /administracao/atividadeeconomica/lista.php?status=success");
            exit; 
        }
        $where = [0 => "codigo = {$_GET['id']}"];
        $atividadeEcon = Atividade_Economica::obterAtividadeeconomica($where);
        break;
    
    
    default:
        header("location: /administracao/atividadeeconomica/lista.php"); 
}


include dirname(__DIR__, 2) . '/includes/cabecalho.php';
include dirname(__DIR__, 2) . '/includes/administracao/atividadeeconomica/cadastro.php';
include dirname(__DIR__, 2) . '/includes/rodape.php';





