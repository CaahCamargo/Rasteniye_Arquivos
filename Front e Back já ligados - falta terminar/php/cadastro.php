<?php
include 'recuperaSenha.php'; // Inclui o arquivo de autenticação

if(isset($_POST['btnRecupera'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmaSenha = $_POST['confirmaSenha'];
    
    recuperar($email, $senha, $confirmaSenha);
}
?>
