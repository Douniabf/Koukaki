// Ajoutez ceci à votre fichier JavaScript

function revealTitles() {
  var titles = document.querySelectorAll("section > h1, section > h2, article > h3");

  titles.forEach(function(title) {
    var windowHeight = window.innerHeight;
    var titleTop = title.getBoundingClientRect().top;
    var titleVisible = 150;

    if (titleTop < windowHeight - titleVisible) {
      title.classList.add("active");
    } else {
      title.classList.remove("active");
    }
  });
}

window.addEventListener("scroll", revealTitles);
window.addEventListener("resize", revealTitles);
window.addEventListener("load", revealTitles); // Pour les cas où le contenu est chargé dynamiquement


function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);

function reveal_vincent() {
  var reveal_vincents = document.querySelectorAll(".reveal_vincent");

  for (var i = 0; i < reveal_vincents.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveal_vincents[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveal_vincents[i].classList.add("active");
    } else {
      reveal_vincents[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal_vincent);