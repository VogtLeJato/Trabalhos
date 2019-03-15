<?php 
print "quantos cigarros voce fuma por dia?";
$cigarros_por_dia = fgets(STDIN); 

print "a quantos anos voce fuma?";
$anos_fumados = fgets(STDIN);

$cigarros_fumados = $cigarros_por_dia*365*$anos_fumados;
$minutos_perdidos = $cigarros_fumados*10;
$horas_perdidas = $minutos_perdidos/60;
$dias_perdidos = $horas_perdidas/24;
  print "Voce perdeu $dias_perdidos dias de vida fumando cingarro \n\n";
