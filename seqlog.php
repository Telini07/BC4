<?php
$n = explode(' ', readline());
$x = floatval($n[0]);
$y = floatval($n[1]);

for($i = 1; $i <= $y; $i++)
{
    echo $i;

    if(($i % $x) == 0)
    {
        echo "\n";
    } 
    else {
        echo " ";
    }
}

?>