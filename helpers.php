<?php

function saudacao(): string
{
    $hora = 6;
    $saudacao = '';

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
    return $texto . $continue;
}
