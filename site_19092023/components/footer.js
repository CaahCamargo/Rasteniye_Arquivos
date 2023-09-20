class footerMenu extends HTMLElement{
    constructor(){
        super()
        this.innerHTML = `
        <section class="navFooter">
            <a href="../design/designInfos.html" data-target="content1" class="navButtons expand-button">
                <i class="fa-solid fa-house"></i>
                <p id="content1" class="expanded-content navHidden">Canteiros</p>
            </a>

            <a href="../design/designBuscar.html" data-target="content2" class="navButtons expand-button">
                <i class="fa-solid fa-magnifying-glass"></i>
                <p id="content2" class="expanded-content navHidden">Buscar</p>
            </a>

            <a href="../design/designInfos.html" data-target="content3" class="navButtons expand-button">
                <i class="fa-solid fa-chart-line"></i>
                <p id="content3" class="expanded-content navHidden">Consumo</p>
            </a>
        </div>
        `
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const expandButtons = document.querySelectorAll(".expand-button");
    const expandedContents = document.querySelectorAll(".expanded-content");

    // Função para expandir ou recolher um conteúdo
    function toggleContent(targetContentId) {
        // Ocultar todos os conteúdos expandidos
        expandedContents.forEach((content) => {
            content.style.display = "none";
        });

        // Exibir o conteúdo associado ao botão clicado
        const targetContent = document.getElementById(targetContentId);
        if (targetContent) {
            targetContent.style.display = "block";
        }

        // Armazenar o botão ativo no localStorage
        localStorage.setItem("activeButton", targetContentId);
    }

    // Adicionar um ouvinte de evento de clique a cada botão
    expandButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const targetContentId = button.getAttribute("data-target");
            const activeButtonId = localStorage.getItem("activeButton");

            // Verificar se o botão clicado não é o mesmo que já está ativo
            if (targetContentId !== activeButtonId) {
                toggleContent(targetContentId);
            }
        });
    });

    // Verificar se há um botão ativo armazenado no localStorage e ativá-lo
    const activeButtonId = localStorage.getItem("activeButton");
    if (activeButtonId) {
        toggleContent(activeButtonId);
    }
});


customElements.define('my-footer-menu', footerMenu)
