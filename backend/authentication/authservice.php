<?php
require_once '../Entity/Usuario.php';
require_once '../dao/UsuarioDAO.php';

$type = filter_input(INPUT_POST, "type");

if ($type === "register") {
        // Lógica de registro do usuário
        $new_nome = filter_input(INPUT_POST, "new_nome");
        $new_email = filter_input(INPUT_POST, "new_email", FILTER_SANITIZE_EMAIL);
        $new_password = filter_input(INPUT_POST, "new_password");
        $confirm_password = filter_input(INPUT_POST, "confirm_password");

        if($new_email && $new_nome && $new_password) {
            if ($new_password === $confirm_password) {
                // Criptografando a senha
                $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

                // Objeto New Usuário         Propriedades abaixo
                $usuario = new Usuario(null, $new_nome, $hashed_password, $new_email, null, 1, null, null);
                $usuarioDAO = new UsuarioDAO();
                $success = $usuarioDAO->create($usuario);

                if($success) {
                header("Location: index.php");
                exit();
                } else {
                    // Tratar a falhar de registro em BD
                }
        } else {
            // To Do: Exibir mensagem de senhas incompativeis
        }
    } else {
        // To Do: Exibir mensagem de formulário inválido
    }
} elseif ($type === "login") {
    // To Do : Verificar se o usuário tem cadastro
    // Dar ao usuário um token de sessão para navegar no site
}

?>