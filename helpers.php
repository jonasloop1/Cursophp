<?php

function saudacao(): string
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

function resumirTexto(string $texto, int $limite, string $continue = '...'): string //":string" definir tipo de retorno!
{

    $textoLimpo = trim($texto);
    if(mb_strlen($textoLimpo) <= $limite){
        return $textoLimpo;
    }

    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite),' '));

    return $resumirTexto.$continue;
}
