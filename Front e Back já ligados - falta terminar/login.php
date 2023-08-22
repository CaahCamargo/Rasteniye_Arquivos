<?php
include 'php/login.php'; // Inclui o arquivo de login
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section class="container">
        <div class="returnPage">
            <i class="fa-solid fa-chevron-left"></i>
            <p>Voltar</p>
        </div>
        <div class="itens">
            <div class="divPresentation">
                <p>RASTENIYE</p>
                <p>AUTOMAÇÃO INTELIGENTE</p>
            </div>
            <div id="login">
                <form method="post" action="php/login.php"> 
                    <div calss="inputsLogin">
                        <input id="email" name="email" required="required" type="text" placeholder="E-mail" />
                        <input id="senha" name="senha" required="required" type="password" placeholder="Senha" />
                    </div>
                    <div class="aboutPass">
                        <div class="lembrar">
                            <input type="checkbox" name="Lembrar-me" id="check" checked></p>
                            <label>Lembrar-me</label>
                        </div>
                        <a href="recuperarConta.php"><p>Esqueci minha senha</p></a>
                    </div>
                    <input type="submit" value="Logar" color=#0064FF name = "btnLogin" class="acesso"/>
                </form>
            </div>
            <div class="crieConta">
                <p>Não tem uma conta?
                    <span>
                        <a href="cadastro.php">Cadastre-se</a>
                    </span>
                </p>
            </div>
        </div>
    </section>
</body>
</html>