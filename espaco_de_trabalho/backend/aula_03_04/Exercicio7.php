<?php
$idade = 10;

if($idade <= 5){
    echo "Educação Infantil.";
} else if ($idade <=10) {
    echo "Ensino Fundamental I.";
} else if($idade <= 13){
    echo"Ensino Fundamental II.";
} else if ($idade <= 17){
    echo "Ensino Médio.";
} else {
    echo "EJA (Educação de Jovens e Adultos).";
}
?>