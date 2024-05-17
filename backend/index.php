<?php
require_once('../backend/dao/AreaDAO.php');
require_once('../backend/dao/CursoDAO.php');
require_once('../backend/dao/DocenteDAO.php');
require_once('../backend/dao/ReservaDAO.php');
require_once("../backend/Entity/Reserva.php");
require_once('../backend/dao/SalaDAO.php');
require_once('../backend/dao/TurmaDAO.php');
$reservaDAO = new reservaDAO();
$reservas = $reservaDAO->getAll()

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento </title>
    <link rel="stylesheet" href="../frontend/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Sanchez:ital@0;1&display=swap" rel="stylesheet">
</head>

<body>
    <div id="global-container">
        <header>
            <!-- MENU -->
            <section id="menu">
                <div id="topo">
                    <img src="../frontend/img/logoSenac.png" alt="logo do senac" id="logo">
                    <p id="titulo-topo">Senac Lapa Tito</p>
                    <button id="botaoLogin" onclick="document.getElementById('id01').style.display='block'">Administração</button>
                </div>
                <!-- MODAL LOGIN -->
                <!-- Modal -->

                <div id="id01" class="modalLogCad">

                    <!-- Modal CONTEÚDO -->
                    <form class="modal-content animate" action="/action_page.php" id="loginADM">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <div class="imgcontainer">
                            <img src="https://www.greenrio.com.br/wp-content/uploads/Logo_Senac-350gr.png" alt="Avatar" class="avatar">
                        </div>
                        <div class="container">
                            <label for="uname"><b>Usuário</b></label>
                            <input type="text" placeholder="Digite o usuário" name="uname" required>
                            
                            <label for="uname"><b>Usuário</b></label>
                            <input type="email" placeholder="Digite o usuário" class="form-control" name="email" id="email" required>

                            
                            <label for="psw"><b>Senha</b></label>
                            <input type="password" placeholder="Digite a senha" class="form-control" name="password" id="password" required>
                            <span class="psw"><a href="#">Esqueceu sua senha?</a></span>
                            <button type="submit">Entrar</button>

                        </div>
                        <div class="container" style="background-color:#f1f1f1">
                            <button type="button" onclick="abreFechaCad()" class="cancelbtn">Cadastre-se</button>

                        </div>
                    </form>
                </div>
                <div id="id02" class="modalLogCad">

                    <!-- Modal CONTEÚDO -->
                    <form class="modal-content animate" action="/action_page.php" id="loginADM">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <div class="imgcontainer">
                            <img src="https://www.greenrio.com.br/wp-content/uploads/Logo_Senac-350gr.png" alt="Avatar" class="avatar">
                        </div>
                        <div class="container">
                            <label for="uname"><b>Nº de Registro</b></label>
                            <input type="text" placeholder="Informe seu NR" name="uname" required>
                            <label for="psw"><b>Senha</b></label>
                            <input type="password" placeholder="Digite a senha" name="psw" required>
                            <label for="psw"><b>Confirmar senha</b></label>
                            <input type="password" placeholder="Confirme a senha" name="psw" required>
                            <button type="submit">Cadastrar</button>

                        </div>
                        <div class="container" style="background-color:#f1f1f1">
                            <button type="button" onclick="abreFechaLogin()" class="cancelbtn">Fazer Login</button>

                        </div>
                    </form>
                </div>
            </section>
        </header>

        <main>

            <!-- PAINEIS ATUALIZADOS PARA VISUALIZAÇÃO -->

            <section>

            
                <div id="data-atual">
                    <p>Aulas de Hoje - 14/05/2024</p>
                </div>



                <div class="cards">
                    <div class="card-turnos">
                        <h3>Manhã</h3>
                            <?php foreach ($reservas as $reserva) : ?>
                                <?php if ($reserva->getPeriodo() === 'Manhã') : ?>
                                    <div class="mini-card-salas">
                                        <h5><?php echo htmlspecialchars($reserva->getInicio(), ENT_QUOTES, 'UTF-8'); ?></h5>                                            
                                        <p><strong>Inicio:</strong> <?php echo htmlspecialchars($reserva->getInicio(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Fim:</strong> <?php echo htmlspecialchars($reserva->getFim(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Período:</strong> <?php echo htmlspecialchars($reserva->getPeriodo(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Turma ID:</strong> <?php echo htmlspecialchars($reserva->getTurmaId(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Sala ID:</strong> <?php echo htmlspecialchars($reserva->getSalaId(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <a href="reservaDetalhes.php?id=<?php echo $reserva->getId(); ?>" class="btn btn-primary">Detalhes</a>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>

                        <a href="./alt.php">aaaaaaaaaaaaaaaaaaaa</a>

                        <div class="card-turnos">
                        <h3>Tarde</h3>
                            <?php foreach ($reservas as $reserva) : ?>
                                <?php if ($reserva->getPeriodo() === 'Tarde') : ?>
                                    <div class="mini-card-salas">
                                        <h5><?php echo htmlspecialchars($reserva->getInicio(), ENT_QUOTES, 'UTF-8'); ?></h5>                                            
                                        <p><strong>Inicio:</strong> <?php echo htmlspecialchars($reserva->getInicio(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Fim:</strong> <?php echo htmlspecialchars($reserva->getFim(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Período:</strong> <?php echo htmlspecialchars($reserva->getPeriodo(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Turma ID:</strong> <?php echo htmlspecialchars($reserva->getTurmaId(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Sala ID:</strong> <?php echo htmlspecialchars($reserva->getSalaId(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <a href="reservaDetalhes.php?id=<?php echo $reserva->getId(); ?>" class="btn btn-primary">Detalhes</a>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>

                        <div class="card-turnos">
                        <h3>Noite</h3>
                            <?php foreach ($reservas as $reserva) : ?>
                                <?php if ($reserva->getPeriodo() === 'Noite') : ?>
                                    <div class="mini-card-salas">
                                        <h5><?php echo htmlspecialchars($reserva->getInicio(), ENT_QUOTES, 'UTF-8'); ?></h5>                                            
                                        <p><strong>Inicio:</strong> <?php echo htmlspecialchars($reserva->getInicio(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Fim:</strong> <?php echo htmlspecialchars($reserva->getFim(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Período:</strong> <?php echo htmlspecialchars($reserva->getPeriodo(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Turma ID:</strong> <?php echo htmlspecialchars($reserva->getTurmaId(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Sala ID:</strong> <?php echo htmlspecialchars($reserva->getSalaId(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <a href="reservaDetalhes.php?id=<?php echo $reserva->getId(); ?>" class="btn btn-primary">Detalhes</a>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>


                    </div>



                </section>

            </main>
        <footer>
        <!-- FOOTER -->
        <section id="footer">
            <span id="titulo-footer">Senac Lapa Tito</span>
            <span>Desenvolvido pela equipe de TII04 e TII05</span>
        </section>
    </footer>
    <script src="../frontend/js/script.js"></script>
</body>
</html>