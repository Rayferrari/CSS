<?php

Class Aluno extends Pessoa{
    private $Notas = [];
    private $rg;

    public function __construct($nome, $dataDeNascimento, $disciplina, $cpf, $identificacao, $rg) {
        parent::__construct ($nome, $dataDeNascimento, $disciplina, $cpf, $identificacao);
        $this->rg = $rg;
    }
}
?>