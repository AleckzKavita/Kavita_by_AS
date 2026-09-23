console.log("JavaScript läuft!");

const images = document.querySelectorAll(".uebermich__images img");

console.log("Gefundene Bilder:", images.length);

let currentImage = 0;

setInterval(() => {
    console.log("Bildwechsel");

    images[currentImage].classList.remove("uebermich__images--active");

    currentImage = (currentImage + 1) % images.length;

    images[currentImage].classList.add("uebermich__images--active");
}, 4000);