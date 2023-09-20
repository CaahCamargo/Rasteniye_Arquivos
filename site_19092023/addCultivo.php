<?php
    include 'php/cadastraCultura.php'; // Inclui o arquivo de cultura
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Cultivo</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/addCultivo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section class="container">
        <div class="returnPage">
            <a href="login.php">
                <Button class="backFiles"><i class="fa-solid fa-caret-left"></i></Button>
            </a>
        </div>
        <div class="mainContent">
            <h3>Adicionar Novo Cultivo</h3>
            <form method="post" action="php/cadastraCultura.php"> 
                <div>
                    <label for="nome">Nome</label>
                    <input placeholder="Nome" id="nome" name="nome" required="required" type="text">
                    <label for="tipo">Tipo</label>
                    <select id="tipo" name="tipo">
                        <option>Leguminosa</option>
                        <option>Verduras</option>
                        <option>Vegetal</option>
                        <option>Fruta</option>
                        <option>Outros</option>
                    </select>
                </div>
                <div class="descricaoCultivo">
                    <p class="alignTextCenter">Descreva abaixo informações para o cultivo da nova especie</p>
                    <label for="umidade">Umidade %</label>
                    <input placeholder="Umidade" id="umidade" name="umidade" required="required" type="number"/>
                    <label for="descricao">Descrição da Espécie</label>
                    <textarea placeholder="Descrição" id="descricao" name="descricao" required="required" type="text"></textarea>
                    <label for="caracteristicas">Instruções para Plantio</label>
                    <textarea placeholder="Características do Plantio" id="caracteristicas" name="caracteristicas" required="required" type="text"></textarea>
                    <label for="armazenamento">Como Armazenar</label>
                    <textarea placeholder="Armazenamento" id="armazenamento" name="armazenamento" required="required" type="text"></textarea>        
                    <input type="submit" value="Cadastrar" color=#0064FF name = "btnCadastraCultura" class="acesso"/>    
                </div>
            </form>
        </div>
    </section>
    <section>
        <footer>
            <my-footer-menu></my-footer-menu>
        </footer>
    </section>
    
    <!-- SCRIPTS -->
    <script src="../components/footer.js" defer></script>
</body>
</html>