import './bootstrap';

document.getElementById('menu-toggle').addEventListener('click', function() {
    var menu = document.getElementById('menu-items');
    menu.style.display = (menu.style.display === 'flex') ? 'none' : 'flex';
});

document.addEventListener("DOMContentLoaded", function () {
    window.addEventListener("scroll", function () {
        let scrollY = window.scrollY;

        // Effet de déplacement progressif des éléments parallaxe
        document.querySelector(".parallaxe-asset1").style.transform = `translateY(${scrollY * 0.3}px)`;
        document.querySelector(".parallaxe-asset2").style.transform = `translateY(${scrollY * 0.5}px)`;
        document.querySelector(".parallaxe-asset3").style.transform = `translateY(${scrollY * 0.2}px)`;
        document.querySelector(".parallaxe-asset4").style.transform = `translateY(${scrollY * 0.8}px)`;

        // Quand le scroll atteint la fin du parallaxe, afficher le contenu
        if (scrollY > window.innerHeight * 1.5) {
            document.body.classList.add("show-content");
        }
    });
});