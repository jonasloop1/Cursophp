<?php
include_once 'helpers2.php';
require_once 'sistemas/configuracao.php';  

echo 'R$ '.formatarValor();
echo '<hr>';
echo formatarNumero(10000000);
echo '<hr>';

$data = date('d/m/y H.i.s');
echo $data;

//$texto = ' <h1>texto</h1> <p>para resumir vindo</p> de uma variavel ';
//$texto = strip_tags($texto);//Limpa todas as TAGS!

//echo resumirTexto2($texto, 50);
//echo '<hr>';

//$valor = 4;
//echo $valor ? $valor : 0;  //Operador ternário, usado pra simplificar o código