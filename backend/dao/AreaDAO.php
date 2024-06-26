<?php

require_once 'config/Database.php';
require_once 'entity/Area.php';
require_once 'BaseDAO.php';

class AreaDAO implements BaseDAO {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getById($id) {
        try {
            // Preparar a consulta SQL
            $sql = "SELECT * FROM Area WHERE Id = :id";

            // Preparar a instrução
            $stmt = $this->db->prepare($sql);

            // Vincular Parâmetros
            $stmt->bindParam(':id', $id);

            // Executa a instrução
            $stmt->execute();

            $area = $stmt->fetch(PDO::FETCH_ASSOC);
            return $area ?
                new Area($area['ID'],
                         $area['Cor'],
                         $area['Tipo'])
            : null;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function getAll() {
        try {
            $sql = "SELECT * FROM Area";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $areas = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return array_map(function ($area) {
                return new Area ($area['ID'],
                                 $area['Cor'],
                                 $area['Tipo']);
            }, $areas);
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