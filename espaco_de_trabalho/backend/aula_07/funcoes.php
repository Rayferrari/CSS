<?php

//Função sem parâmetros
// function apresentar (){
//     echo "Olá, boa noite!";
// }
//  Chamando - (invocando)
// apresentar();
// apresentar();
// apresentar();

// Função com parâmetros
// function apresentar ($nome) {//Nome => é um parâmetro
//     echo "Olá, $nome boa noite! \n";
// }

// apresentar("João");  //João é um argumento
// apresentar("Alice");
// apresentar("Ana");
// apresentar("Pedro");

// Função com vários parâmetros
function apresentar ($nome, $idade, $cidade) {//Nome => é um parâmetro
    echo "Olá, $nome boa noite!. Você tem $idade anos, e mora em $cidade\n";
}

apresentar("João",18, "Rio de Janeiro");  
apresentar("Alice",16,"Manaus");
apresentar("Ana", 17, "Alagoas");





?> 