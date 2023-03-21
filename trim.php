<?php
//trim - remove espaços do inicio ou fim da string
//strlen - retorna o número de caracteres da string
$str = " IFSP Birigui ";

echo "Tamanho: ".strlen($str)."<br>";

$str = trim($str);

echo "Tamanho: ".strlen($str)."<br>";
?>