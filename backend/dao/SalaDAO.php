<?php

require_once 'config/Database.php';
require_once 'entity/Sala.php';
require_once 'BaseDAO.php';

class SalaDAO implements BaseDAO {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getById($id) {
        try {
            // Preparar a consulta SQL
            $sql = "SELECT * FROM Sala WHERE Id = :id";

            // Preparar a instrução
            $stmt = $this->db->prepare($sql);

            // Vincular Parâmetros
            $stmt->bindParam(':id', $id);

            // Executa a instrução
            $stmt->execute();

            $sala = $stmt->fetch(PDO::FETCH_ASSOC);
            return $sala ?
                new Sala($sala['ID'],
                         $sala['Cor'],    
                         $sala['Tipo'],
                         $sala['Capacidade'])
            : null;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function getAll() {
        try {
            $sql = "SELECT * FROM Sala";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $salas = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return array_map(function ($sala) {
                return new Sala ($sala['ID'],
                                 $sala['Cor'],
                                 $sala['Tipo'],
                                 $sala['Capacidade']);
            }, $salas);
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