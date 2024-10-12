<?php
//Arquivo responsavel pela inicialização do sistema
//declare(strict_types = 1); faz com que tipos de varias diferentes das declaradas não sejam aceitas por outros tipos!
include_once 'sistemas/configuracao.php';
include_once 'helpers.php';

$texto = 'texto para resumir vindo uma variavel';

$string = 'TEXTO';
$int = 01;
$float = 3.3;
$bool = true;
$nulo = null; // diferente de uma string VAZIA 

var_dump($texto); // Serve para debugar uma variavel, classe, funcão ou objeto... 
echo '<hr>';
echo saudacao();
echo '<hr>';
echo resumirTexto($texto, 10);
