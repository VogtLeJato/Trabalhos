<?php 
print"insira o preço da mercadoria";
$produto = fgets(STDIN);
print"insira o percentual do desconto";
$porcentagem = fgets(STDIN);
$desconto = ($porcentagem/100)* $produto;
$produtocomdesconto = $produto - $desconto;
print "o valor do preço do produto com desconto é de $produtocomdesconto, e o desconto é de $desconto";
