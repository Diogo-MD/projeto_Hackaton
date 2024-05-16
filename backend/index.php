<?php
require_once("template/header.php");
require_once('../backend/dao/AreaDAO.php');
require_once('../backend/dao/CursoDAO.php');
require_once('../backend/dao/DocenteDAO.php');
require_once('../backend/dao/ReservaDAO.php');
require_once('../backend/dao/SalaDAO.php');
require_once('../backend/dao/TurmaDAO.php');
require_once("../backend/Entity/Reserva.php");

$reservaDAO = new ReservaDAO();
$reserva = new Reserva (3, '2024-05-22', '2024-05-22', 'Noite', 3, 3);
echo $reservaDAO->update($reserva);
?>

<h2>Projeto Mapa Sala Senac</h2>



<?php
require_once("template/footer.php");
?>