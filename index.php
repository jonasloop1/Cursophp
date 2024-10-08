<?php
//Arquivo responsavel pela inicialização do sistema

include_once 'sistemas/configuracao.php';
include_once 'helpers.php';

$texto = 'texto para resumir vindo uma variavel';

echo saudacao();
echo '<hr>';
echo resumirTexto($texto, 10);