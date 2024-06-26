<?php
require_once '../Entity/Usuario.php';
require_once '../dao/UsuarioDAO.php';

session_start(); // Inicia a sessão

// Verifica se o formulário de login foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos de usuário e senha foram preenchidos
    if (!empty($_POST['uname']) && !empty($_POST['password'])) {
        $username = $_POST['uname'];
        $password = $_POST['password'];
        
        // Conexão com o banco de dados (substitua as informações conforme necessário)
        $servername = "localhost";
        $username_db = "MapaSala";
        $password_db = "root";
        $dbname = "";

        // Cria a conexão
        $conn = new mysqli($servername, $username_db, $password_db, $dbname);

        // Verifica se houve erro na conexão
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        // Consulta SQL para verificar se o usuário existe e a senha está correta
        $sql = "SELECT id FROM usuarios WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);

        // Se houver um resultado, o login é bem-sucedido
        if ($result->num_rows == 1) {
            // Autenticação bem-sucedida, redireciona para a página desejada
            header("Location: ../alt.php");
            exit();
        } else {
            // Autenticação falhou, redireciona de volta para a página de login com uma mensagem de erro
            header("Location: ../alt.php");
            exit();
        }
    } else {
        // Caso algum dos campos esteja vazio, redireciona de volta para a página de login com uma mensagem de erro
        header("Location: sua_pagina_de_login.php?erro=2");
        exit();
    }
} else {
    // Caso a requisição não seja POST, redireciona de volta para a página de login
    header("Location: ../index.php");
    exit();
}
?>