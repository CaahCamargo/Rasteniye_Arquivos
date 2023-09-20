<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Cultivo</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/buscar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section class="container">
        <div class="mainContent">
            <div class="buscar">
                <div>
                    <p class="alignTextCenter">O que voce procura?</p>
                    <input placeholder="Buscar Cultura" >
                </div>
                <div>
                    <div class="addThreeItens card  cardOptionsTipoPlanta">
                        <i class="fa-solid fa-qrcode"></i>
                        <p>Batata</p>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                    <div class="addThreeItens card cardOptionsTipoPlanta">
                        <i class="fa-solid fa-qrcode"></i>
                        <p>Cenoura</p>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
                <div>
                    <a href="addCultivo.php">
                        <button class="newBtn">Novo Cultivo</button>
                    </a>
                </div>
            </div>
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