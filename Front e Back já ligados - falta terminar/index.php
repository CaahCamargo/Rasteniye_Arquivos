<?php
// Inclua o arquivo de conexão.
include 'php/conexao.php';

session_start();

if (isset($_SESSION['usuario_logado'])) {
    $usuarioLogado = $_SESSION['usuario_logado'];
}

try {
    // Prepara e executa a consulta SQL.
    $stmt = $conn->prepare("
        SELECT a.numAcio, a.datAcio, a.horAcio, a.tipAcio, l.idLeit, l.umiSolo, l.tempAmb, l.umiAmb, l.volAgua
        FROM acionamento a
        JOIN leitura l ON a.numAcio = l.idLeit
    ");

    $stmt->execute();
    
    // Obtém os resultados da consulta.
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Itera pelos resultados e armazena os valores em variáveis.
    foreach ($result as $row) {
        $numAcio = $row['numAcio'];
        $datAcio = $row['datAcio'];
        $horAcio = $row['horAcio'];
        $tipAcio = $row['tipAcio'];
        $dataFormatada = (new DateTime($datAcio))->format('d/m/Y');

        $idLeit = $row['idLeit'];
        $umiSolo = $row['umiSolo'];
        $tempAmb = $row['tempAmb'];
        $umiAmb= $row['umiAmb'];
        $volAgua = $row['volAgua'];
        $aguaML = $volAgua * 1000;
        
        // Agora você pode usar essas variáveis conforme necessário.
        //echo "Número de Ação: $numAcio<br>";
        //echo "Data de Ação: $datAcio<br>";
        //echo "Data formatada: $dataFormatada<br>";
        //echo "Hora de Ação: $horAcio<br>";
        //echo "Tipo de Ação: $tipAcio<br>";

        //echo "Número da Leitura: $numAcio<br>";
        //echo "Umidade Solo: $umiSolo<br>";
        //echo "Temperatura Ambiente: $tempAmb<br>";
        //echo "Umidade Ambiente: $umiAmb<br>";
        //echo "Água Gasta: $aguaML<br>";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="jpeg/png" href="img/logoVerde.jpeg">
</head>
<body>
    <section class="container">
        <div class="mainContent">
            <div class="addTwoItens">
                <h4>Olá, <?php echo "$usuarioLogado" ?></h4>
                <Button class="alteraCanteiro">Alterar Canteiro</Button>
                <a href="login.php">
                    <Button class="logout">Logout</Button>
                </a>
            </div>
            <div class="addTwoItens card cardLightGreen canteiroPrincipal">
                <p>CENOURA FOI PLANTADA À 21 DIAS</p>
                <div>
                    <i class="fa-solid fa-carrot iconCanteiro"></i>
                    <a href="cultivo.php">
                        <p>Ver meu cultivo <i class="fa-solid fa-chevron-right"></i></p>
                    </a>
                </div>
            </div>
            <div class="addTwoItens card cardDarkGreen iconsGreenCards cardInfosData">
                <i class="fa-solid fa-droplet"></i>
                <div>
                    <p>ULTIMA IRRIGAÇÃO</p>
                    <p><?php echo "$dataFormatada<br> $horAcio" ?></p>
                </div>
            </div>
            <div class="addTwoItens divMedidas">
                <div class="card cardDarkGreen">
                    <p>TEMPERATURA</p>
                    <p>AMBIENTE - <?php echo "$tempAmb"?>°C</p>
                </div>
                <div class="card cardDarkGreen">
                    <p>UMIDADE</p>
                    <p>AMBIENTE - <?php echo "$umiAmb"?>%</p>
                </div>
            </div>
            <div class="card cardDarkGreen">
                <div>
                    <p>UMIDADE DO SOLO</p>
                    <p><?php echo "$umiSolo"?>%</p>
                </div>
            </div>
            <div class="card cardDarkGreen">
                <div>
                    <p>ÁGUA GASTA HOJE</p>
                    <p><?php echo "$aguaML"?> ML</p>
                </div>
            </div>
            <div>
                <p>O que voce gostaria de fazer</p>
                <div class="addTwoItens card cardLightGreen cardOptionsMenu">
                    <i class="fa-solid fa-droplet"></i>
                    <p>Configurações de Irrigação</p>
                </div>

                <div class="addTwoItens card cardLightGreen cardOptionsMenu">
                    <i class="fa-solid fa-chart-line"></i>
                    <p>Meu quadro de Consumo</p>
                </div>
                
                <div class="addTwoItens card cardLightGreen cardOptionsMenu">
                    <i class="fa-solid fa-bookmark"></i>
                    <p>Manual Rasteniye</p>
                </div>
            </div>
        </div>
        <div class="navFooter">
            <a href="index.php">
                <button><i class="fa-solid fa-house"></i></button>
            </a>
            <button><i class="fa-solid fa-droplet"></i></button>
            <button><i class="fa-solid fa-chart-line"></i></button>
            <button><i class="fa-solid fa-bookmark"></i></button>
            <a href="buscar.php">
                <button><i class="fa-brands fa-pagelines"></i></button>
            </a>
            <a href="configuraCanteiro.php">
                <button><i class="fa-solid fa-gear"></i></button>
            </a>
        </div>
    </section>
    
</body>
</html>