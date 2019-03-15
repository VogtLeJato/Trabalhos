<?php 
print"digite o salario atual";
$salario = fgets(STDIN);
print"digite a porcentagem do aumento";
$porcentagem = fgets(STDIN);
$aumento = ($porcentagem/100)* $salario;
$salarioatual = $aumento + $salario;
print "o salario atual é de $salarioatual reais e o aumento é de $aumento reais";
