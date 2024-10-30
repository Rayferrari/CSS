<?php
Class Animal {
    protected $nome;
    protected $idade;
    protected $cor;


function apresentar () {
    echo "Fazendo barulho";
}

public function __construct($nome, $idade, $cor){
    $this->nome = $nome;
    $this->idade = $idade;
    $this->cor = $cor;    
}

}
?>