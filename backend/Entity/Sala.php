<?php

class Sala {
    // Propriedades
    Private $id;
    Private $cor;
    Private $tipo;
    Private $capacidade;

    // Construtor
    public function __construct($id, $cor, $tipo, $capacidade) {
        $this->id = $id;
        $this->cor = $cor;
        $this->tipo = $tipo;
        $this->capacidade = $capacidade;
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

    public function getCapacidade() {
        return $this->capacidade;
    }
}


?>