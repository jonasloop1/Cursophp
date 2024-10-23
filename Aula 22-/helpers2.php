<?php

/**
 * Formatar valor
 * @param $valor recebe um número aleatório
 * @return string número formatado
 */

 function formatarValor(float $valor = null): string
 {
    return number_format(($valor ? $valor : 0), '2', ',', '.');
 }

 /**
 * Formatar número com pontos apenas
 * @param $numero recebe um valor aleatório
 * @return string número formatado
 */

 function formatarNumero(string $numero = null): string
 {
    return number_format($numero ?:0, '0','.','.');
 }

/**
 * Saudação ao usuário
 * @return string saudações
 */

function saudacao2(): string
{
    echo $hora = date('H:i:s');

    if ($hora >= 00 && $hora <= 5) {
        $saudacao = 'Boa madrugada';
    } elseif ($hora >= 6 && $hora <= 12) {
        $saudacao = 'Boa bom dia';
    } elseif ($hora >= 13 && $hora <= 18) {
        $saudacao = 'Boa tarde';
    } else {
        $saudacao = 'Boa noite';
    }
    return $saudacao;
}

/**
 * Resume um texto
 * 
 * @param string $texto recebe um texto
 * @param int $limite define o tamanho do texto
 * @param string $continue opcional - vai ser exibido ao final do resumo 
 * @return string texto resumido
 */

function resumirTexto2(string $texto, int $limite, string $continue = '...'): string //":string" definir tipo de retorno!
{

    $textoLimpo = trim(strip_tags($texto));
    if (mb_strlen($textoLimpo) <= $limite) {
        return $textoLimpo;
    }

    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ' '));

    return $resumirTexto . $continue;
}
