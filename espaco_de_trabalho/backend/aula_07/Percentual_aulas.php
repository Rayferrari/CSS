<?php

$numeroAulas = readline("Digite o número total de aulas: ");
$frequencia = [];

for ($i = 1; $i <= 5; $i++) {
    $presencas = readline("Digite o número de aulas frequentadas pelo aluno $i: ");
    $percentual = ($presencas / $numeroAulas) * 100;
    $frequencia [$i] = $percentual;
}
echo "Percentual de frequência dos aluno: \n";
for ($i= 1; $i <=5; $i++) {
    echo "Aluno $i: " . $frequencia[$i] . "%\n";


}
?>