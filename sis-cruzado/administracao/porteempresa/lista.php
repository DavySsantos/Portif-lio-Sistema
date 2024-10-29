<?php
include dirname(__DIR__, 2) . '/vendor/autoload.php';
use App\Entity\Empresa_Porte;

$porteemp = Empresa_Porte::obterEmpresaportes();
// esquema de rota
include dirname(__DIR__, 2) . '/includes/cabecalho.php';
include dirname(__DIR__, 2) . '/includes/administracao/porteempresa/lista.php';
include dirname(__DIR__, 2) . '/includes/rodape.php';
