document.addEventListener("DOMContentLoaded", () => {
    toggleButton = document.querySelector(".toggle-button");
    navbarLinks = document.querySelector(".headerMenu");

    toggleButton.addEventListener("click", () => {
        navbarLinks.classList.toggle("active");
    });
    document.addEventListener("click", (event) => {
        if (!navbarLinks.contains(event.target) && !toggleButton.contains(event.target)) {
            navbarLinks.classList.remove("active");
        }
    });
    window.addEventListener("scroll", () => {
        navbarLinks.classList.remove("active");
    });
});

// TODO:
/* document.addEventListener('DOMContentLoaded', function () {
    const menuBtn = document.querySelector('.menu-btn');
    const menuConteudo = document.querySelector('.menu-conteudo');
    const expansivelBtn = document.querySelector('.expansivel-btn');
    const submenu = document.querySelector('.submenu');

    menuBtn.addEventListener('click', function () {
        menuConteudo.style.display = menuConteudo.style.display === 'block' ? 'none' : 'block';
    });

    expansivelBtn.addEventListener('click', function () {
        submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
    });

    // Fecha o menu se clicar fora dele
    window.addEventListener('click', function (event) {
        if (!event.target.matches('.menu-btn') && !event.target.matches('.expansivel-btn')) {
            menuConteudo.style.display = 'none';
            submenu.style.display = 'none';
        }
    });
});
 */
