<?php 
 print"conversor de tempo, digite o tempo e veja quanto isso é em segundos\n ";
 print"digite os dias ";
 $dias = fgets(STDIN);
 print"as horas ";
 $horas = fgets(STDIN);
 print"digite os minutos ";
 $minutos  = fgets(STDIN);
 print"e os segundos ";
 $segundos = fgets(STDIN);

 $segundosfinais = ($dias * 86400) + ($horas * 3600) + ($minutos * 60) + ($segundos);
 print"$dias dias $horas horas $minutos minutos e $segundos segundos são, ao total $segundosfinais segundos";

