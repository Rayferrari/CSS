<?php
//Crie um programa que utilize o while para exibir uma contagem regressiva de 10 até 1 e no final, exiba a mensagem "Hoje tem show da Gloria Groove" 

$contador = 10;
while($contador >=1) {
    echo $contador . "\n" ;
    // $contador = $contador - 1; // decremento 
    $contador--;
}
echo "Hoje tem show da Gloria Groove!"

?>