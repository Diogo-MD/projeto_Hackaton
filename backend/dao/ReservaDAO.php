<?php

require_once 'config/Database.php';
require_once 'entity/Reserva.php';
require_once 'BaseDAO.php';

class ReservaDAO implements BaseDAO {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function getById($id) {
        try {
            // Preparar a consulta SQL
            $sql = "SELECT * FROM Reserva WHERE Id = :id";

            // Preparar a instrução
            $stmt = $this->db->prepare($sql);

            // Vincular Parâmetros
            $stmt->bindParam(':id', $id);

            // Executa a instrução
            $stmt->execute();

            $reserva = $stmt->fetch(PDO::FETCH_ASSOC);
            return $reserva ?
                new Reserva ($reserva['ID'],
                             $reserva['Inicio'],
                             $reserva['Fim'],
                             $reserva['Periodo'],
                             $reserva['TurmaID'],
                             $reserva['SalaID'])
            : null;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function getAll() {
        try {
            $sql = "SELECT * FROM Reserva";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $reservas = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return array_map(function ($reserva) {
                return new Reserva ($reserva['ID'],
                                    $reserva['Inicio'],
                                    $reserva['Fim'],
                                    $reserva['Periodo'],
                                    $reserva['TurmaID'],
                                    $reserva['SalaID']);
            }, $reservas);
        } catch (PDOException $e) {
            return [];
        }
    }

    public function create($reserva) {
        try {
            $sql = "INSERT INTO Reserva (Inicio, Fim, Periodo, TurmaID, SalaID) VALUES 
                                (:inicio, :fim, :periodo, :turmaId, :salaId)";

            $stmt = $this->db->prepare($sql);
            $inicio = $reserva->getInicio();
            $fim = $reserva->getFim();
            $periodo = $reserva->getPeriodo();
            $turmaId = $reserva->getTurmaId();
            $salaId = $reserva->getSalaId();

            $stmt->bindParam(':inicio', $inicio);
            $stmt->bindParam(':fim', $fim);
            $stmt->bindParam(':periodo', $periodo);
            $stmt->bindParam(':turmaId', $turmaId);
            $stmt->bindParam(':salaId', $salaId);
            
            // Executar a instrução
            $stmt->execute();

            // Retornar verdadeiro se a inserção for bem sucedida
            return true;
        } catch (PDOException $e) {
            // TO-DO: implementar log
            return false;
        }
    }
    
    public function update($reserva) {
        try {
            $sql = "UPDATE Reserva 
                    SET Inicio = :inicio, Fim = :fim, Periodo = :periodo, TurmaID = :turmaid, SalaId = :salaId
                    WHERE Id = :id";

            $stmt = $this->db->prepare($sql);
            $id = $reserva->getId();
            $inicio = $reserva->getInicio();
            $fim = $reserva->getFim();
            $periodo = $reserva->getPeriodo();
            $turmaId = $reserva->getTurmaId();
            $salaId = $reserva->getSalaId();
    
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':inicio', $inicio);
            $stmt->bindParam(':fim', $fim);
            $stmt->bindParam(':periodo', $periodo);
            $stmt->bindParam(':turmaId', $turmaId);
            $stmt->bindParam(':salaId', $salaId);
    
            return $stmt->execute();
        } catch (PDOException $e) {
            // Handle exception (e.g., log error)
            return false;
        }
    }
    
    public function delete($id) {
        try {
            $sql = "DELETE FROM Reserva WHERE Id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            // Handle exception (e.g., log error)
            return false;
        }
    }
}

?>