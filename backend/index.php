<?php
require_once("template/header.php");
require_once('../backend/dao/ReservaDAO.php');

$reservaDAO = new ReservaDAO();
$reserva = $reservaDAO->getByID(3);
echo $reserva->getSalaId();

?>

<h2>Projeto Mapa Sala Senac</h2>



<?php
require_once("template/footer.php");
?>