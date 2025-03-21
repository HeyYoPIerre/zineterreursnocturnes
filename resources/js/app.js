import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
    const asset1 = document.querySelector(".parallaxe-asset1");
    const asset2 = document.querySelector(".parallaxe-asset2");
    const asset3 = document.querySelector(".parallaxe-asset3");
    const asset4 = document.querySelector(".parallaxe-asset4");
    const titre = document.querySelector(".titre-parallaxe");
    const fond = document.querySelector(".fond-parallaxe");
    const header = document.getElementById("header"); 

    window.addEventListener("scroll", function () {
        let scrollY = window.scrollY;
        let docHeight = document.documentElement.scrollHeight;
        let windowHeight = window.innerHeight;
        let limit = docHeight - windowHeight;
        //vitesse de défilement différée 
        asset1.style.transform = `translateY(${scrollY * -0.8}px)`;
        asset2.style.transform = `translateY(${scrollY * -0.6}px)`;
        asset3.style.transform = `translateY(${scrollY * -0.6}px)`;
        asset4.style.transform = `translateY(${scrollY * 0.4}px)`;
        fond.style.transform = `translateY(${scrollY * -0.6}px)`;

        //disparition du titre
        titre.style.opacity = Math.max(1 - (scrollY / (limit * 0.2)), 0); 
        titre.style.transform = `translateY(${scrollY * 0.5}px)`;
        //apparition du header
        if (scrollY > limit * 0.5) {
            header.classList.add("visible");
        } else {
            header.classList.remove("visible");
        }
    });
});