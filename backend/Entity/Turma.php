<?php

class Turma {
    // Propriedades
    Private $id;
    Private $nome;
    Private $oferta;
    Private $cursoId;
    Private $docenteId;

    // Construtor
    public function __construct($id, $nome, $oferta, $cursoId, $docenteId) {
        $this->id = $id;
        $this->nome = $nome;
        $this->oferta = $oferta;
        $this->cursoId = $cursoId;
        $this->docenteId = $docenteId;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getOferta() {
        return $this->oferta;
    }

    public function getCursoId() {
        return $this->cursoId;
    }

    public function getDocenteId() {
        return $this->docenteId;
    }
}


?>