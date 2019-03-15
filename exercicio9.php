<?php 

print"escolha sua opcão
*Opção 1 : apenas em latas
*Opção 2 : apenas em galões
*Opção 3 : em latas e galões
Galões: R$10,00
Latas: R$35,00";

 $escolha = fgets(STDIN);

if ($escolha == 1)
{print "digite quantos metros voce irá pintar";
   $metros1 = fgets(STDIN) ;
    $litros1 = $metros1 /6;
    $latas1 = $litros1/18;

    $latas1 = ceil($galoes1); 
      
$preço1 = $latas1 * 35;
print"Você precisará de $latas1 latas e o preço total será $preço1 reais";}

if ($escolha == 2)
{ print "digite quantos metros voce irá pintar";
  $metros2 = fgets(STDIN) ;
    $litros2 = $metros2/6;
    $galoes2 = $litros2/3.6;
    $galoes2 = ceil($galoes2) ; 
    $preço2 = $galoes * 3.6;

   print"Você precisará de $galoes2 galões e3 o preço será $preço2 reais";}

if ($escolha == 3)
{ print "digite quantos metros você irá pintar";
  $metros3 = fgets(STDIN);
  $litros3= $metros3/6;

    
    while ($litros3<18);
    {$litros = $litros-18;
    $latasprecisas = $latasprecisas + 1;
    $preço3 = $preço3 + 35;};
    while ($litros3<0);
        {$litros = $litros - 3.6;
        $galoesprecisos = $galoesprecisos + 1;
        $preço3 = $preço3 + 10;};

        print "Voce irá precisar de $galoesprecisos galoes e de $latasprecisas latas eo preço será $preço3 reais";




;}


