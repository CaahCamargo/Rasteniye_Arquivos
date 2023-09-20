class botaoAcao extends HTMLElement{
    constructor(){
        super()
        this.innerHTML = `
        <div class="fab" id="fab">
            <i class="fa-solid fa-seedling"></i>
        </div>
        <div class="fab-menu" id="fab-menu">
            <div class="fab-menu-item" id="item1">
            <p>Novo Dispositivo</p>
            <i class="fa-solid fa-qrcode"></i>
            </div>
            <div class="fab-menu-item" id="item2">
                <p>Novo Cultivo</p>
                <i class="fa-solid fa-seedling"></i>
            </div>
        </div>
        `
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const fabButton = document.getElementById("fab");
    const fabMenu = document.getElementById("fab-menu");

    fabButton.addEventListener("click", function () {
        // Alternar a classe "active" para mostrar/ocultar o menu
        fabMenu.classList.toggle("active");
    });

    // Adicione ouvintes de evento para os itens do menu
    const menuItems = document.querySelectorAll(".fab-menu-item");
    menuItems.forEach((menuItem) => {
        menuItem.addEventListener("click", function () {
            // Coloque a ação que deseja executar para cada item do menu aqui
            alert(`Clicou em ${menuItem.textContent}`);
        });
    });

    // Adicione um ouvinte de evento de clique no documento para fechar o menu ao clicar fora dele
    document.addEventListener("click", function (event) {
        if (!fabMenu.contains(event.target) && !fabButton.contains(event.target)) {
            fabMenu.classList.remove("active");
        }
    });
});

customElements.define('my-button-flutuante', botaoAcao)