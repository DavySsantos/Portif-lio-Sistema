<?php
// esquema de rota
include dirname(__DIR__, 2) . '/vendor/autoload.php';

use App\Entity\Atividade_Economica;

$economica = Atividade_Economica::obterAtividadeseconomicas();
// echo '<pre>'; print_r($atividades); echo '</pre>'; exit;

include dirname(__DIR__, 2) . '/includes/cabecalho.php';
include dirname(__DIR__, 2) . '/includes/administracao/atividadeeconomica/lista.php';
include dirname(__DIR__, 2) . '/includes/rodape.php';


