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
                <img src="../frontend//img//logoSenac.png" alt="logo do senac" id="logo">
                <p id="titulo-topo">Senac Lapa Tito</p>    
                <button id="botaoLogin" onclick="document.getElementById('id01').style.display='block'">Administração</button>
            </div>
            <!-- MODAL LOGIN -->
            <!-- Modal -->
            
                <div id="id01" class="modalLogCad">
                    
                <!-- Modal CONTEÚDO -->
                    <form class="modal-content animate" action="/action_page.php" id="loginADM">
                    <span onclick="document.getElementById('id01').style.display='none'"
                    class="close" title="Close Modal">&times;</span>
                    <div class="imgcontainer">
                        <img src="https://www.greenrio.com.br/wp-content/uploads/Logo_Senac-350gr.png" alt="Avatar" class="avatar">
                    </div>
                    <div class="container btn-position">
                        <label for="uname"><b>Usuário</b></label>
                        <input type="text" placeholder="Digite o usuário" name="uname" required>
                        <label for="psw"><b>Senha</b></label>
                        <input type="password" placeholder="Digite a senha" name="psw" required>
                        <span class="psw" style="display: block;"><a href="#">Esqueceu sua senha?</a></span>
                        <div id="btn-position"><button type="submit">Entrar</button></div>
                        <a href="./alt.php">Entrar sem authservice (Deixa baixo)</a>
                
                    </div>
                    
                    <div class="container" style="background-color:#f1f1f1" id="btn-position">
                        <button type="button" onclick="abreFechaCad()" class="cancelbtn">Cadastre-se</button>
                
                    </div>
                    </form>
                </div>
                <div id="id02" class="modalLogCad">
                    
                <!-- Modal CONTEÚDO -->
                    <form class="modal-content animate" action="/action_page.php" id="loginADM">
                        <span onclick="document.getElementById('id02').style.display='none'"
                        class="close" title="Close Modal">&times;</span>
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
                        <div id="btn-position"><button type="submit">Entrar</button></div>
                
                    </div>
                    <div class="container" style="background-color:#f1f1f1" id="btn-position">
                        <button type="button" onclick="abreFechaLogin()" class="cancelbtn" >Fazer Login</button>
                    </div>
                    </form>
                </div>
            
            <!-- FILTROS -->
            <div id="filtros">
                <form action="/action_page.php">
                    <select id="filtro-area" name="area" class="filtro">
                    <option value="area">Área</option>
                    <option value="adm">Administração</option>
                    <option value="ti">Tecnologia da Informação</option>
                    <option value="mkt">Comunicação e Marketing</option>
                    </select>
                </form>
                <form action="/action_page.php">
                    <select id="filtro-curso" name="curso" class="filtro">
                    <option value="curso">Curso</option>
                    <option value="adm">Administração</option>
                    <option value="redes">Redes</option>
                    <option value="mkt">Marketing</option>
                    </select>
                </form>
                <form action="/action_page.php">
                    <select id="filtro-docente" name="docente" class="filtro">
                    <option value="docente">Docente</option>
                    <option value="docente1">Luana</option>
                    <option value="docente2">Celso</option>
                    <option value="docente3">Fernando</option>
                    </select>
                </form>
            </div>
            <div id="periodos" style="display: none;">
                <label class="container home-periodo">Manhã
                    <input type="radio" name="radio" >
                    <span class="checkmark" id="manha-home"></span>
                </label>
                <label class="container home-periodo">Tarde
                    <input type="radio" name="radio" id="tarde-home">
                    <span class="checkmark"></span>
                </label>
                <label class="container home-periodo">Noite
                    <input type="radio" name="radio" id="noite-home">
                    <span class="checkmark"></span>
                </label>
            </div>
        </section>        
    </header>

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

                                        <p><strong>Docente:</strong> <?php echo htmlspecialchars($reserva->getInicio(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Inicio:</strong> <?php echo htmlspecialchars($reserva->getInicio(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Fim:</strong> <?php echo htmlspecialchars($reserva->getFim(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Período:</strong> <?php echo htmlspecialchars($reserva->getPeriodo(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Turma ID:</strong> <?php echo htmlspecialchars($reserva->getTurmaId(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Sala ID:</strong> <?php echo htmlspecialchars($reserva->getSalaId(), ENT_QUOTES, 'UTF-8'); ?></p>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>

                        <div class="card-turnos">
                        <h3>Tarde</h3>
                            <?php foreach ($reservas as $reserva) : ?>
                                <?php if ($reserva->getPeriodo() === 'Tarde') : ?>
                                    <div class="mini-card-salas">
                                        <p><strong>Inicio:</strong> <?php echo htmlspecialchars($reserva->getInicio(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Fim:</strong> <?php echo htmlspecialchars($reserva->getFim(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Período:</strong> <?php echo htmlspecialchars($reserva->getPeriodo(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Turma ID:</strong> <?php echo htmlspecialchars($reserva->getTurmaId(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Sala ID:</strong> <?php echo htmlspecialchars($reserva->getSalaId(), ENT_QUOTES, 'UTF-8'); ?></p>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>

                        <div class="card-turnos">
                        <h3>Noite</h3>
                            <?php foreach ($reservas as $reserva) : ?>
                                <?php if ($reserva->getPeriodo() === 'Noite') : ?>
                                    <div class="mini-card-salas">
                                        <p><strong>Inicio:</strong> <?php echo htmlspecialchars($reserva->getInicio(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Fim:</strong> <?php echo htmlspecialchars($reserva->getFim(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Período:</strong> <?php echo htmlspecialchars($reserva->getPeriodo(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Turma ID:</strong> <?php echo htmlspecialchars($reserva->getTurmaId(), ENT_QUOTES, 'UTF-8'); ?></p>
                                        <p><strong>Sala ID:</strong> <?php echo htmlspecialchars($reserva->getSalaId(), ENT_QUOTES, 'UTF-8'); ?></p>
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