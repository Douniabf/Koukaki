// Récupérer les éléments des nuages
const nuage1 = document.querySelector('.nuage1');
const nuage2 = document.querySelector('.nuage2');

// Fonction pour animer les nuages
function animerNuages() {
    // Calculer la position de chaque nuage par rapport au défilement de la page
    const position1 = window.scrollY * -0.25;
    const position2 = window.scrollY * -0.27;

    // Déplacer les nuages horizontalement
    nuage1.style.transform = `translateX(${position1}px)`;
    nuage2.style.transform = `translateX(${position2}px)`;
}

// Écouter l'événement de défilement de la page et appeler la fonction d'animation
window.addEventListener('scroll', animerNuages);

// Appeler la fonction une fois au chargement de la page pour initialiser les positions des nuages
animerNuages();
