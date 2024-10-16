<?php
include_once 'helpers2.php';

$texto = ' <h1>texto</h1> <p>para resumir vindo</p> de uma variavel ';
$texto = strip_tags($texto);//Limpa todas as TAGS!

echo resumirTexto2($texto, 50);
