<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Alterações</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Sanchez:ital@0;1&display=swap" rel="stylesheet"> 
</head>
<body>
    <div id="global-container">
    <header>
        <!-- MENU -->
        <section id="menu">
            <div id="topo">
                <img src="img/logoSenac.png" alt="logo do senac" id="logo">
                <p id="titulo-topo">Senac São Paulo</p>    
                <button id="botaoLogin">Administração</button>
            </div>           
        </section>        

    </header>

    <main>


        <!-- AGENDAMENTO -->

        <section id="agendamento">


            <!-- AÇÕES PRINCIPAIS -->

            <a class="botao-acoes" id="acao-atual" onclick="agendar()">Fazer Agendamento</a>
            <a class="botao-acoes" onclick="alterar()">Alterar/Deletar Agendamentos</a>
            <a class="botao-acoes" onclick="gerar()">Gerar Relatório</a>


            <!-- FILTROS -->

            <div id="filtros-agendamento">
                <form action="/action_page.php">
                    <select id="sala" name="sala" class="filtro-agn">
                    <option value="docente">Sala</option>
                    </select>
                </form>

                <form action="/action_page.php">
                    <select id="capacidade" name="capacidade" class="filtro-agn">
                    <option value="capacidade">Capacidade</option>
                    </select>
                </form>
                <div id="periodos">
                    <label class="container">Manhã
                        <input type="radio" checked="checked" name="radio" >
                        <span class="checkmark"></span>
                    </label>

                    <label class="container">Tarde
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">Noite
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>


            <!-- CAMPOS DE PREENCHIMENTO (AGENDAMENTO) -->
            <section id="container-agendamento">
                <div id="campos-preenchimento">                

                    <form action="/action_page.php" class="campos">
                        <label for="text">Curso: </label>
                        <select name="area" class="input">                    
                        <option value="area"></option>
                        </select>
                    </form>

                    <form action="/action_page.php" class="campos">
                        <label for="text">Sub-área: </label>
                        <input type="text" class="input">
                    </form>

                    <form action="/action_page.php" class="campos">
                        <label for="text">Sigla: </label>
                        <select name="area" class="input">                    
                        <option value="area"></option>
                        </select>
                    </form>

                    <form action="/action_page.php" class="campos">
                        <label for="text">Cód. Turma: </label>
                        <input type="text" class="input">
                    </form>

                    <form action="/action_page.php" class="campos">
                        <label for="text">Cód. Oferta: </label>
                        <input type="text" class="input" disabled>
                    </form>

                    <form action="/action_page.php" class="campos">
                        <label for="text">Docente: </label>
                        <select name="area" class="input">                    
                        <option value="area"></option>
                        </select>
                    </form>

                    <div>
                        <form action="/action_page.php" class="campos">
                            <label for="text">De: </label>
                            <input type="date" class="input" name="calendario">
                        </form>

                        <form action="/action_page.php" class="campos">
                            <label for="text"> Até: </label>
                            <input type="date" class="input" name="calendario">
                        </form>
                    </div>

                    <div>
                        <form action="/action_page.php" class="campos">
                            <label for="appt">Ínicio:</label>
                            <input type="time" class="input" name="appt">
                        </form>

                        <form action="/action_page.php" class="campos">
                            <label for="appt">Fim:</label>
                            <input type="time" class="input" name="appt">
                        </form>
                    </div>

                    <div class="botoes">
                        <button class="btn">Agendar</button>
                        <button class="btn">Limpar</button>                  
                    </div>
                </div>

                <!-- CALENDÁRIO -->
                <section id="calendario-exibicao">
                    <div id="container-calendario">
                        <div class="month">
                            <ul>
                            <li class="prev">&#10094;</li>
                            <li class="next">&#10095;</li>
                            <li>Maio<br><span style="font-size:18px">2024</span></li>
                            </ul>
                        </div>
                        
                        <ul class="weekdays">
                            <li class="domingo">Dom</li>
                            <li class="dias">Seg</li>
                            <li class="dias">Ter</li>
                            <li class="dias">Qua</li>
                            <li class="dias">Qui</li>
                            <li class="dias">Sex</li>
                            <li class="dias">Sab</li>
                        </ul>
                        
                        <ul class="days">
                            <li class="domingo">1</li>
                            <li class="indispo">2</li>
                            <li class="indispo">3</li>
                            <li class="indispo">4</li>
                            <li class="parcial">5</li>
                            <li class="indispo">6</li>
                            <li class="indispo">7</li>
                            <li class="domingo">8</li>
                            <li class="indispo">9</li>
                            <li class="indispo">10</span></li>
                            <li class="indispo">11</li>
                            <li class="indispo">12</li>
                            <li class="indispo">13</li>
                            <li class="indispo">14</li>
                            <li class="domingo">15</li>
                            <li class="indispo">16</li>
                            <li class="indispo">17</li>
                            <li class="parcial">18</li>
                            <li class="indispo">19</li>
                            <li class="indispo">20</li>
                            <li class="indispo">21</li>
                            <li class="domingo">22</li>
                            <li class="indispo">23</li>
                            <li class="indispo">24</li>
                            <li class="indispo">25</li>
                            <li class="indispo">26</li>
                            <li class="indispo">27</li>
                            <li class="indispo">28</li>
                            <li class="domingo">29</li>
                            <li class="indispo">30</li>
                            <li class="indispo">31</li>
                            <li class="dispo">1</li>
                            <li class="dispo">2</li>
                            <li class="dispo">3</li>
                            <li class="dispo">4</li>
                        </ul>
                    </div>
                </section>
            </section>
        </section>



        <!-- ALTERAR/DELETAR AGENDAMENTOS -->

        <section id="alterar-agenda" style="display: none;">
            <!-- AÇÕES PRINCIPAIS -->
            <div id="acoes">
                <a class="botao-acoes" onclick="agendar()">Fazer Agendamento</a>
                <a class="botao-acoes" id="acao-atual" onclick="alterar()">Alterar/Deletar Agendamentos</a>
                <a class="botao-acoes" onclick="gerar()">Gerar Relatório</a>
            </div>    

            <!-- FILTROS -->

            <div id="filtros-agendamento">
                <form action="/action_page.php">
                    <select id="sala" name="sala" class="filtro-agn" >
                    <option value="docente">Sala</option>
                    </select>
                </form>

                <form action="/action_page.php">
                    <select id="docente" name="docente" class="filtro-agn">
                    <option value="docente">Docente</option>
                    </select>
                </form>

                <form action="/action_page.php">
                    <select id="area" name="area" class="filtro-agn">
                    <option value="area">Área</option>
                    </select>
                </form>

                <form action="/action_page.php">
                    <select id="curso" name="curso" class="filtro-agn">
                    <option value="curso">Curso</option>
                    </select>
                </form>

                <div id="periodos">
                    <label class="container">Manhã
                        <input type="radio" checked="checked" name="radio" >
                        <span class="checkmark"></span>
                    </label>

                    <label class="container">Tarde
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">Noite
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>

            <!-- RESULTADO DA BUSCA -->

            <table>
                <thead id="tabela-resultado">
                    <tr>
                        <th>Docente</th>
                        <th>Curso</th>
                        <th>Turma </th>
                        <th>Sala</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="card">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><ion-icon name="trash-outline"></ion-icon></td>
                    </tr>
                    <tr class="card">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><ion-icon name="trash-outline"></ion-icon></td>
                    </tr>
                </tbody>
            </table>


            <!-- PREENCHIMENTO PARA ALTERAÇÕES -->

            <form action="/action_page.php" class="campos">
                <label for="text">Curso: </label>
                <select name="area" class="input">                    
                <option value="area"></option>
                </select>
            </form>

            <form action="/action_page.php" class="campos">
                <label for="text">Sub-área: </label>
                <input type="text" class="input">
            </form>

            <form action="/action_page.php" class="campos">
                <label for="text">Sigla: </label>
                <select name="area" class="input">                    
                <option value="area"></option>
                </select>
            </form>

            <form action="/action_page.php" class="campos">
                <label for="text">Cód. Turma: </label>
                <input type="text" class="input">
            </form>

            <form action="/action_page.php" class="campos">
                <label for="text">Cód. Oferta: </label>
                <input type="text" class="input">
            </form>

            <form action="/action_page.php" class="campos">
                <label for="text">Docente: </label>
                <select id="filtro-area" name="area" class="input">                    
                <option value="area"></option>
                </select>
            </form>

            <form action="/action_page.php" class="campos">
                <label for="text">De: </label>
                <input type="date" class="input" name="calendario">
            </form>

            <form action="/action_page.php" class="campos">
                <label for="text"> Até: </label>
                <input type="date" class="input" name="calendario">
            </form>

            <form action="/action_page.php" class="campos">
                <label for="appt">Ínicio:</label>
                <input type="time" class="input" name="appt">
            </form>

            <form action="/action_page.php" class="campos">
                <label for="appt">Fim:</label>
                <input type="time" class="input" name="appt">
            </form>

            <!-- BOTÕES DE AÇÃO -->

            <button class="btn">Agendar</button>
            <button class="btn">Limpar</button> 

            <!-- CALENDÁRIO -->
            
            <section id="calendario-exibicao">
                <div id="container-calendario">
                    <div class="month">
                        <ul>
                        <li class="prev">&#10094;</li>
                        <li class="next">&#10095;</li>
                        <li>Maio<br><span style="font-size:18px">2024</span></li>
                        </ul>
                    </div>
                    
                    <ul class="weekdays">
                        <li class="domingo">Dom</li>
                        <li class="dias">Seg</li>
                        <li class="dias">Ter</li>
                        <li class="dias">Qua</li>
                        <li class="dias">Qui</li>
                        <li class="dias">Sex</li>
                        <li class="dias">Sab</li>
                    </ul>
                    
                    <ul class="days">
                        <li class="domingo">1</li>
                        <li class="indispo">2</li>
                        <li class="indispo">3</li>
                        <li class="indispo">4</li>
                        <li class="parcial">5</li>
                        <li class="indispo">6</li>
                        <li class="indispo">7</li>
                        <li class="domingo">8</li>
                        <li class="indispo">9</li>
                        <li class="indispo">10</span></li>
                        <li class="indispo">11</li>
                        <li class="indispo">12</li>
                        <li class="indispo">13</li>
                        <li class="indispo">14</li>
                        <li class="domingo">15</li>
                        <li class="indispo">16</li>
                        <li class="indispo">17</li>
                        <li class="parcial">18</li>
                        <li class="indispo">19</li>
                        <li class="indispo">20</li>
                        <li class="indispo">21</li>
                        <li class="domingo">22</li>
                        <li class="indispo">23</li>
                        <li class="indispo">24</li>
                        <li class="indispo">25</li>
                        <li class="indispo">26</li>
                        <li class="indispo">27</li>
                        <li class="indispo">28</li>
                        <li class="domingo">29</li>
                        <li class="indispo">30</li>
                        <li class="indispo">31</li>
                        <li class="dispo">1</li>
                        <li class="dispo">2</li>
                        <li class="dispo">3</li>
                        <li class="dispo">4</li>
                    </ul>
                </div>
            </section>

        </section>


        <!-- GERAR RELATÓRIO -->

        <section id="relatorio" style="display: none;">

             <!-- AÇÕES PRINCIPAIS -->

            <div id="acoes">
                <a class="botao-acoes" onclick="agendar()">Fazer Agendamento</a>
                <a class="botao-acoes" onclick="alterar()">Alterar/Deletar Agendamentos</a>
                <a class="botao-acoes" id="acao-atual" onclick="gerar()">Gerar Relatório</a>
            </div>

            <!-- FILTROS -->

            <div id="filtros-agendamento">
                <form action="/action_page.php">
                    <select id="sala" name="sala" class="filtro-agn">
                    <option value="docente">Sala</option>
                    </select>
                </form>

                <form action="/action_page.php">
                    <input type="date" id="calendario" name="calendario" class="filtro-agn">
                </form>

                <div id="periodos">
                    <label class="container">Manhã
                        <input type="radio" checked="checked" name="radio" >
                        <span class="checkmark"></span>
                    </label>

                    <label class="container">Tarde
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">Noite
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>

                <button class="btn">Gerar Relatório</button>

                <table>
                    <thead>
                        <tr>
                            <th>Curso</th>
                            <th>Docente</th>
                            <th>Sala</th>
                            <th>Horário</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="card">
                            <td></td>
                            <td></td> 
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="card">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

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
    </div>

        <script src="js/script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>