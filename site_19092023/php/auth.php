<?php
session_start();

function login($email, $senha) {
    include 'conexao.php'; // Inclui o arquivo de conexão

    $stmt = $conn->prepare("SELECT * FROM usuario WHERE email = :email AND senha = :senha");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    echo $user['email'], $user['senha'];

    if ($user && $senha) {
        $_SESSION['usuario_logado'] = $user['nome'];

        header('Location: ../index.php');
        exit();
    } else {
        echo "<script language='javascript' type='text/javascript'>
        alert('Usuário ou senha incorretos!');
        window.location.href='../login.php'
        </script>";
    }
}
?>
