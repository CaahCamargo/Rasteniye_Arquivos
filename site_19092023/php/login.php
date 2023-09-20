<?php
include 'auth.php'; // Inclui o arquivo de autenticação

if(isset($_POST['btnLogin'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    login($email, $senha);
}
?>
