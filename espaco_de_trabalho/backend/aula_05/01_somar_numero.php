<?php
//ALT Z -->  quebra linha 
// Escreva um programa que peça para o usuário digitar números. Some todoso os números inseridos e pare a execução do while quando o usuário digitar 0. Em seguida, exiba o total da soma. 
$soma = 0;
while (true) {
    $numero = readline("Digite um número (0 para sair): ");
    if ($numero == 0 ) {
        break;  // quebra, sai do loop while;
    }
    $soma = $soma + $numero;
}
echo "A soma total é: " . $soma . "\n";
?>