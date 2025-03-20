import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
    const asset1 = document.querySelector(".parallaxe-asset1");
    const asset2 = document.querySelector(".parallaxe-asset2");
    const asset3 = document.querySelector(".parallaxe-asset3");
    const asset4 = document.querySelector(".parallaxe-asset4");
    const titre = document.querySelector(".titre-parallaxe");
    const header = document.getElementById("header"); // Sélectionne l'élément avec l'ID 'header'
    const parallaxeContainer = document.querySelector(".parallaxe-container");

    window.addEventListener("scroll", function () {
        let scrollY = window.scrollY;
        let limit = window.innerHeight * 1.2; // Point où le parallaxe se termine

        // Effet parallaxe : les assets montent à différentes vitesses
        asset1.style.transform = `translateY(${scrollY * -0.3}px)`;
        asset2.style.transform = `translateY(${scrollY * -0.5}px)`;
        asset3.style.transform = `translateY(${scrollY * -0.8}px)`;

        // La forêt du bas descend pour révéler le contenu
        asset4.style.transform = `translateY(${scrollY * 0.5}px)`;

        // Le titre passe derrière la forêt et disparaît progressivement
        titre.style.opacity = Math.max(1 - scrollY / limit, 0);
        titre.style.transform = `translateY(${scrollY * -0.5}px)`;

        // Quand le parallaxe est terminé, on affiche le header
        if (scrollY > limit) {
            header.classList.add("visible");
        } else {
            header.classList.remove("visible");
        }
    });
});