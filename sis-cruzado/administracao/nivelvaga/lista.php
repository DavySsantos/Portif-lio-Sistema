<?php
// esquema de rota
include dirname(__DIR__, 2) . '/vendor/autoload.php';
use App\Entity\Vaga_Nivel;
    
$nivel = Vaga_Nivel::obterVaganiveis();
// echo '<pre>'; print_r($nivel); echo '</pre>'; exit;

include dirname(__DIR__, 2) . '/includes/cabecalho.php';
include dirname(__DIR__, 2) . '/includes/administracao/nivelvaga/lista.php';
include dirname(__DIR__, 2) . '/includes/rodape.php';
