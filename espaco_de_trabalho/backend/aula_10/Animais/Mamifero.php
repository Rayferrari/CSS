<?php

class Mamifero extends Animal{
    private $quantidadesDePatas;
   
    public function __construct($nome, $idade, $cor, $quantidadesDePatas) {
        parent::__construct ($nome, $idade, $cor);
        $this->quantidadesDePatas = $quantidadesDePatas;
}
}
?>