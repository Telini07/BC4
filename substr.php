<?php
$data = date('d/m/Y');
$dia = substr($data,0,2);
$mes = substr($data,3,2);
$ano = substr($data,6,4);
echo "Dia: ".$dia."<br>";
echo "Mes: ".$mes."<br>";
echo "Ano: ".$ano."<br>";

$novadata = $dia . "/" . $mes . "/" . $ano;
echo "Nova data: $novadata\n";
// Implementar Mês e Ano
?>