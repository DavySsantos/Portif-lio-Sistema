<?php
    
    include dirname(__DIR__, 2) . '/vendor/autoload.php';
    include dirname(__DIR__, 2) . '/includes/cabecalho.php';

    use App\Entity\Pessoa;
   // esquema de rota

    $pessoas = Pessoa::obterPessoas();
    include dirname(__DIR__, 2) . '/includes/cadastro/pessoa/lista.php';
    include dirname(__DIR__, 2) . '/includes/rodape.php';
?>