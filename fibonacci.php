<?php
$n = readline();
$x[0] = 0;
$x[1] = 1;

$res = "$x[0] $x[1]";

for($a = 2; $a < $n; $a++)
{
    $x[$a] = $x[$a-2] + $x[$a-1];
    
    $res .= " $x[$a]";
}

echo "$res\n"
?>