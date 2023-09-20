<?php
session_start();

function recuperar($email, $senha, $confirmaSenha) {
    include 'conexao.php'; // Inclui o arquivo de conexão



    $stmt = $conn->prepare("SELECT * FROM usuario WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if($senha == $confirmaSenha){
            try {
                $stmt = $conn->prepare("INSERT INTO usuario (nome, email, senha) VALUES (:usuario, :email, :senha)");
                $stmt->bindParam(':usuario', $usuario);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':senha', $senha);
                $stmt->execute();
        
                $logado = $usuario;
        
                echo "Usuário cadastrado com sucesso!";
                $_SESSION['usuario_logado'] = $logado;
                header('Location: ../index.php');
                exit();
        
            } catch (PDOException $e) {
                echo "<script language='javascript' type='text/javascript'>
                alert('Erro ao cadastrar o usuário!');
                window.location.href='../cadastro.php'
                </script>";
            }
        }
        else{
            echo "<script language='javascript' type='text/javascript'>
                alert('As senhas não são iguais!');
                window.location.href='../cadastro.php'
                </script>";
        }   
    } else {
        echo "<script language='javascript' type='text/javascript'>
                alert('O usuário informado não existe!');
                window.location.href='../cadastro.php'
                </script>";
    }  
}
?>
