document.addEventListener("DOMContentLoaded", () => {
    toggleButton = document.querySelector(".toggle-button");
    navbarLinks = document.querySelector(".headerMenu");
    expansivelBtn = document.querySelector('.expansivel-btn');
    submenu = document.querySelector('.submenu');

    toggleButton.addEventListener("click", () => {
        // navbarLinks.classList.toggle("active");
        navbarLinks.style.display = navbarLinks.style.display === 'block' ? 'none' : 'block';
    });

    document.addEventListener("click", (event) => {
        if (!navbarLinks.contains(event.target) && !toggleButton.contains(event.target)) {
            navbarLinks.classList.remove("active");
        }
    });

    expansivelBtn.addEventListener('click', function () {
        submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
    });

    window.addEventListener("scroll", () => {
        navbarLinks.classList.remove("active");
    });
});
