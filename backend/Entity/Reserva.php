<?php

class Turma {
    // Propriedades
    Private $id;
    Private $inicio;
    Private $fim;
    Private $periodo;
    Private $turmaId;
    Private $salaId;

    // Construtor
    public function __construct($id, $inicio, $fim, $periodo, $turmaId, $salaId) {
        $this->id = $id;
        $this->inicio = $inicio;
        $this->fim = $fim;
        $this->periodo = $periodo;
        $this->turmaId = $turmaId;
        $this->salaId = $salaId;
    }

    public function getId() {
        return $this->id;
    }

    public function getInicio() {
        return $this->inicio;
    }

    public function getFim() {
        return $this->fim;
    }

    public function getPeriodo() {
        return $this->periodo;
    }

    public function getTurmaId() {
        return $this->turmaId;
    }

    public function getSalaId() {
        return $this->salaId;
    }
}


?>