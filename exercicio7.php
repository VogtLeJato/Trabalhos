<?php

print'quantos km foram rodados com o carro? ';
$km_rodados = fgets(STDIN);
print'o carro foi alugado por quantos dias? ';
$dias_alugados = fgets(STDIN);
$total_pagar = ($km_rodados * 0.15) + ($dias_alugados * 60);
print "o total a pagar é de $total_pagar reais";