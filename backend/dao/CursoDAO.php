<?php

require_once 'config/Database.php';
require_once 'entity/Curso.php';
require_once 'BaseDAO.php';

class CursoDAO implements BaseDAO {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getById($id) {
        try {
            // Preparar a consulta SQL
            $sql = "SELECT * FROM Curso WHERE Id = :id";

            // Preparar a instrução
            $stmt = $this->db->prepare($sql);

            // Vincular Parâmetros
            $stmt->bindParam(':id', $id);

            // Executa a instrução
            $stmt->execute();

            $curso = $stmt->fetch(PDO::FETCH_ASSOC);
            return $curso ?
                new Curso($curso['ID'],
                          $curso['Nome'],
                          $curso['Sigla'],
                          $curso['AreaID'])
            : null;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function getAll() {
        try {
            $sql = "SELECT * FROM Curso";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $cursos = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return array_map(function ($curso) {
                return new Curso ($curso['ID'],
                                    $curso['Nome'],
                                    $curso['Sigla'],
                                    $curso['AreaID']);
            }, $cursos);
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