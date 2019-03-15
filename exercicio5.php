<?php
print"digite a distancia da viajem em km";
$distancia = fgets(STDIN);
print"agora digite a velocidade de cruzeiro da viagem em km/h";
$velocidademedia = fgets(STDIN);
$tempo = $distancia/$velocidademedia;
print"para essa viajem voce levara $tempo horas";