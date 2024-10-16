<?php
//Arquivo responsavel pela inicialização do sistema
//declare(strict_types = 1); faz com que tipos de varias diferentes das declaradas não sejam aceitas por outros tipos!
include_once 'helpers.php';

$texto = ' texto para resumir vindo uma variavel ';

echo $total = mb_strlen(trim($texto)); // strle:conta quantidade de caractes. trim:limpa espaços em branco de uma String
echo ': Quantidade de caracteres dessa String!';
echo '<hr>';
echo $resumo = mb_substr($texto, 1, 13); // corta a String definida pelo usuario.
echo '<hr>';

//$nulo = null; // diferente de uma string VAZIA 

//var_dump($texto); // Serve para debugar uma variavel, classe, funcão ou objeto... 
//echo '<hr>';
//echo saudacao();
//echo '<hr>';
echo resumirTexto($texto, 10);
