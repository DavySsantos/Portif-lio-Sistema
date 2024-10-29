<?php
include dirname(__DIR__, 2) . '/vendor/autoload.php';

use App\Entity\Vaga_Nivel;

$status = $_GET['acao'];
$nivelVaga = new Vaga_Nivel();

switch ($status) {
    case 'inserir':
        if (isset($_POST['cadastrar'])) {
            $obj = new Vaga_Nivel();
            $obj->inserir(["nome" => $_POST['nivelvaga']]);

            header("location: /administracao/nivelvaga/lista.php?status=success");
        }
        break;

    case 'alterar':
        if (isset($_POST['cadastrar'])) {
            $obj = new Vaga_Nivel();

            $where = "codigo = {$_GET['id']}";

            $values = [
                'nome' => $_POST['nivelvaga']
            ];

            $obj->atualizar($where, $values);

            header("location: /administracao/nivelvaga/lista.php?status=success");
            exit;
        }
        $where = [0 => "codigo = {$_GET['id']}"];
        $nivelVaga = Vaga_Nivel::obterVaganivel($where);
        break;


    default:
        header("location: /administracao/nivelvaga/lista.php");
}


include dirname(__DIR__, 2) . '/includes/cabecalho.php';
include dirname(__DIR__, 2) . '/includes/administracao/nivelvaga/cadastro.php';
include dirname(__DIR__, 2) . '/includes/rodape.php';
