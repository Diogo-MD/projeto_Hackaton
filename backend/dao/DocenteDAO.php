<?php

require_once 'config/Database.php';
require_once 'entity/Docente.php';
require_once 'BaseDAO.php';

class DocenteDAO implements BaseDAO {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getById($id) {
        try {
            // Preparar a consulta SQL
            $sql = "SELECT * FROM Docente WHERE Id = :id";

            // Preparar a instrução
            $stmt = $this->db->prepare($sql);

            // Vincular Parâmetros
            $stmt->bindParam(':id', $id);

            // Executa a instrução
            $stmt->execute();

            $docente = $stmt->fetch(PDO::FETCH_ASSOC);
            return $docente ?
                new Docente($docente['ID'],
                            $docente['Nome'])
            : null;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function getAll() {
        try {
            $sql = "SELECT * FROM Docente";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $docentes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return array_map(function ($docente) {
                return new Docente ($docente['ID'],
                                    $docente['Nome']);
            }, $docentes);
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