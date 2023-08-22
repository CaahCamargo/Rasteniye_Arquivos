<?php
    include 'php/cadastro.php'; // Inclui o arquivo de login
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section class="container">
        <div class="returnPage">
            <i class="fa-solid fa-chevron-left"></i>
            <a href="login.php">
                <p>Voltar</p>
            </a>
        </div>
        <div class="itens">
            <div class="divPresentation">
                <p>RASTENIYE</p>
                <p>FAÇA SEU CADASTRO</p>
            </div>
            <div id="cadastro">
                <form method="post" action="php/cadastro.php"> 
                    <div calss="inputsLogin">
                        <input id="usuario" name="usuario" required="required" type="text" placeholder="Usuário"/>
                        <input id="email" name="email" required="required" type="email" placeholder="E-mail"/>
                        <input id="senha" name="senha" required="required" type="password" placeholder="Senha"/>
                        <input id="confirmaSenha" name="confirmaSenha" required="required" type="password"placeholder="Confirme sua senha"/>
                    </div>
                    <input type="submit" value="Cadastrar" color=#0064FF name = "btnCadastro" class="acesso"/>
                </form>
            </div>
        </div>
    </section>
</body>
</html>