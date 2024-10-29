<?php
// esquema de rota
include dirname(__DIR__, 2) . '/vendor/autoload.php';
use App\Entity\Pessoa;
    $pessoas = Pessoa::obterPessoas();
include dirname(__DIR__, 2) . '/includes/cabecalho.php';
include dirname(__DIR__, 2) . '/includes/cadastro/empresa/lista.php';
include dirname(__DIR__, 2) . '/includes/rodape.php';
