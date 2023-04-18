<?php
$n = explode(' ', fgets(STDIN));
$j = $n[0];
$s = 0;

for($i = 1; true; $i++)  
{
 if ($n[$i] > 0) {
    $k = $n[$i];
    break;
 }
}

for($i = 0; $i <= $k-1; $i++)
{
    $s += $j + $i;
}

echo $s."\n";
?>