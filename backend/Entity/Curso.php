<?php

class Curso {
    // Propriedades
    Private $id;
    Private $nome;
    Private $sigla;
    Private $areaId;


    // Construtor
    public function __construct($id, $nome, $sigla, $areaId) {
        $this->id = $id;
        $this->nome = $nome;
        $this->sigla = $sigla;
        $this->areaId = $areaId;

    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSigla() {
        return $this->sigla;
    }

    public function getAreaId() {
        return $this->areaId;
    }
}


?>