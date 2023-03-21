<?php
$linha = readline();
$val = explode('', $linha);
$A = $val[0];
$N = $val[1];

$s = 0;

for ($i = 0; $i < $N; $i++) {
    $s += $A + $i;
}

echo "$s\n";
?>