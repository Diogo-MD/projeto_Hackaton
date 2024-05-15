<?php

class Turma {
    // Propriedades
    Private $id;
    Private $cor;
    Private $tipo;

    // Construtor
    public function __construct($id, $cor, $tipo) {
        $this->id = $id;
        $this->cor = $cor;
        $this->tipo = $tipo;
    }

    public function getId() {
        return $this->id;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getTipo() {
        return $this->tipo;
    }
}


?>