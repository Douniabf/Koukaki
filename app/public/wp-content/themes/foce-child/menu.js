document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.hamburger');
    const menu = document.querySelector('.menu');
    const cross = document.querySelector('.cross');

    hamburger.addEventListener('click', function() {
        if (menu.style.display === 'block') {
            menu.style.display = 'none';
            cross.style.display = 'none';
            hamburger.style.display = 'block';
        } else {
            menu.style.display = 'block';
            cross.style.display = 'block';
            hamburger.style.display = 'none';
        }
    });

    cross.addEventListener('click', function() {
        menu.style.display = 'none';
        cross.style.display = 'none';
        hamburger.style.display = 'block';
    });

    const menuLinks = document.querySelectorAll('.menu a');

    // événement pour chaque lien dans le menu
    menuLinks.forEach(link => {
        link.addEventListener('click', function() {
            menu.style.display = 'none'; // Mettre le display à none au clic sur un lien
            hamburger.style.display = 'block';
            cross.style.display = 'none';
        });
    });
});
