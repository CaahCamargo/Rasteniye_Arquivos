<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cultivo</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cultivo.css">
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
            <div>
                <p class="alignTextCenter">O que voce gostaria de fazer</p>
                <div class="addThreeItens card cardOptionsCanteiro">
                    <i class="fa-solid fa-qrcode"></i>
                    <p>Adicionar Novo Cultivo</p>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>

                <div class="addThreeItens card cardOptionsCanteiro">
                    <i class="fa-solid fa-seedling"></i>
                    <p>Adicionar Novo Canteiro</p>
                    <i class="fa-solid fa-chevron-right"></i>
                </div>
            </div>
            <div>
                <p class="alignTextCenter">Meus Canteiros</p>
                <div class="addThreeItens card cardLightGreen cardOptionsMenu">
                    <p>Cenoura</p>
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