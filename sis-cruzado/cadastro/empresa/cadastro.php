<?php

include dirname(__DIR__, 2) . '/vendor/autoload.php';

use App\Entity\Pessoa;
use App\Entity\Atividade_Economica;
use App\Entity\Empresa_Porte;

// $emp = Pessoa::obterPessoa();
$economica = Atividade_Economica::obterAtividadeseconomicas();
$porteemp = Empresa_Porte::obterEmpresaportes();

// esquema de rota
$status = $_GET['acao']; // inserir/alterar/excluir
$emp = new Pessoa();

switch ($status) {
    case 'inserir':
        if (isset($_POST['cadastrar'])) {
            
            $cpfcnpj = preg_replace('/[^0-9]/', '', $_POST['cpfcnpj']);
            $telefone = preg_replace('/[^0-9]/', '', $_POST['telefone']);
            $cep = preg_replace('/[^0-9]/', '', $_POST['cep']);

            $obj = new Pessoa();
            $obj->inserir([
                "cpfcnpj" => $cpfcnpj,
                "nome" => $_POST['nomeempresa'],
                "logradouro" => $_POST['endereco'],
                "cep" => $cep,
                "cidade" => $_POST['cidade'],
                "bairro" => $_POST['bairro'],
                "numero" => $_POST['numero'],
                "complemento" => $_POST['complemento'],
                "telefone" => $telefone,
                "cAtividadeEconomica" => $_POST['atividadeeco'],
                "cEmpresaPorte" => $_POST['porteemp']
            ]);
            header("location: /cadastro/empresa/lista.php?status=success");
        }
        break;

    case 'alterar':
        if (isset($_POST['cadastrar'])) {
            $obj = new Pessoa();

            $where = "cpfcnpj = {$_GET['id']}";

            $cpfcnpj = preg_replace('/[^0-9]/', '', $_POST['cpfcnpj']);
            $telefone = preg_replace('/[^0-9]/', '', $_POST['telefone']);
            $cep = preg_replace('/[^0-9]/', '', $_POST['cep']);

            $values = [
                'cpfcnpj' => $cpfcnpj,
                'nome' => $_POST['nomeempresa'],
                'logradouro' => $_POST['endereco'],
                'cep' => $cep,
                'cidade' => $_POST['cidade'],
                'bairro' => $_POST['bairro'],
                'numero' => $_POST['numero'],
                'complemento' => $_POST['complemento'],
                'telefone' => $telefone,
                'cAtividadeEconomica' => $_POST['atividadeeco'],
                'cEmpresaPorte' => $_POST['porteemp'],
            ];

            $obj->atualizar($where, $values);

            header("location: /cadastro/empresa/lista.php?status=success");
            exit;
        }
        $where = [0 => "cpfcnpj = {$_GET['id']}"];
        $emp = Pessoa::obterPessoa($where);
        break;


    default:
        header("location: /cadastro/empresa/lista.php");
}

include dirname(__DIR__, 2) . '/includes/cabecalho.php';
include dirname(__DIR__, 2) . '/includes/cadastro/empresa/cadastro.php';
include dirname(__DIR__, 2) . '/includes/rodape.php';

// if (isset($_POST['cadastrar'])) {
//     $cpfcnpj = preg_replace('/[^0-9]/', '', $_POST['cpfcnpj']);
//     $telefone = preg_replace('/[^0-9]/', '', $_POST['telefone']);
//     $cep = preg_replace('/[^0-9]/', '', $_POST['cep']);
//     $obj = new Pessoa();
//     $obj->inserir([
//         "cpfcnpj" => $cpfcnpj,
//         "nome" => $_POST['nomeempresa'],
//         "logradouro" => $_POST['endereco'],
//         "cep" => $cep,
//         "cidade" => $_POST['cidade'],
//         "bairro" => $_POST['bairro'],
//         "numero" => $_POST['numero'],
//         "complemento" => $_POST['complemento'],
//         "telefone" => $telefone,
//         "cAtividadeEconomica" => $_POST['atividadeeco'],
//         "cEmpresaPorte" => $_POST['porteemp']
//     ]);
// }


