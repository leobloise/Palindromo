<?php
/**
 * Função mb_strrev não é uma implementação do módulo.
 * Fonte: https://www.php.net/manual/pt_BR/function.strrev.php
 */
/**
 * Fonte utilizada para testes:
 * Fonte: https://www.todamateria.com.br/palindromo/#:~:text=Pal%C3%ADndromo%2C%20do%20grego%20palin%20(novo,considerando%2Dse%20apenas%20as%20letras.
 * 
 */
function mb_strrev($str)
{
    $new_str = '';
    for($i = mb_strlen($str) - 1; $i >= 0 ; $i--) {
        $new_str.= mb_substr($str, $i, 1);
    }
    return $new_str;
}

function palindromo($str)
{
    $str = strval($str);

    if(empty($str) && $str != '0') {
        return false;
    }

    $str = mb_strtolower($str);

    $tamanho = mb_strlen($str);

    if($tamanho == 1) {
        return true;
    }

    $reverse = mb_strrev($str);

    if($reverse == $str) {
        return true;
    } else {
        return false;
    }

}

$str = "rapar";

if(palindromo($str)) {
    echo "Esse valor '{$str}' é palindromo".PHP_EOL;
} else {
    echo "Esse valor '{$str}' não é palindromo".PHP_EOL;
}