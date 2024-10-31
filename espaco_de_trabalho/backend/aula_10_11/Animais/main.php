<?php
//Importa a classe do Animal e Mamifero
require_once 'Animal.php';
require_once 'Mamifero.php';

class Main {
    public static function run(){
        //Instânciando um objeto da classe animal
        $animal1 = new Animal ("Leão", 5,"Amarelo");
        $animal2 = new Animal ("Cachorro", 5,"Caramelo");
        $animal1->comunicar();

        $mamifero1 = new Mamifero("Baleia", 103, "azul", 0);
        $mamifero2 = new Mamifero("Gato", 1, "Preto", 4);
        $mamifero1->comunicar();
        }
    }
    Main::run();
?> 