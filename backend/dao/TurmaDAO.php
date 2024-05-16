<?php

require_once 'config/Database.php';
require_once 'entity/Turma.php';
require_once 'BaseDAO.php';

class TurmaDAO implements BaseDAO {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getById($id) {
        try {
            // Preparar a consulta SQL
            $sql = "SELECT * FROM Turma WHERE Id = :id";

            // Preparar a instrução
            $stmt = $this->db->prepare($sql);

            // Vincular Parâmetros
            $stmt->bindParam(':id', $id);

            // Executa a instrução
            $stmt->execute();

            $turma = $stmt->fetch(PDO::FETCH_ASSOC);
            return $turma ?
                new Turma($turma['ID'],
                          $turma['Nome'],    
                          $turma['Oferta'],
                          $turma['CursoID'],
                          $turma['DocenteID'])
            : null;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function getAll() {
        try {
            $sql = "SELECT * FROM Turma";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $turmas = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return array_map(function ($turma) {
                return new Turma ($turma['ID'],
                                    $turma['Nome'],
                                    $turma['Oferta'],
                                    $turma['CursoID'],
                                    $turma['DocenteID']);
            }, $turmas);
        } catch (PDOException $e) {
            return [];
        }
    }
    public function create($entity) {

    }
    public function update($entity) {

    }
    public function delete($id) {

    }


}
?>