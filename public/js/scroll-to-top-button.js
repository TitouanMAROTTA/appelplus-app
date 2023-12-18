// Obtenir le bouton
var scrollToTopBtn = document.getElementById("scrollToTopBtn");

// Lorsque l'utilisateur fait défiler la page de 50 pixels vers le bas, afficher le bouton
window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    var scrollToTopBtn = document.getElementById("scrollToTopBtn");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollToTopBtn.classList.add("show");
    } else {
        scrollToTopBtn.classList.remove("show");
    }
}

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

// Attacher la fonction scrollFunction à l'événement de défilement
window.onscroll = function() {
    scrollFunction();
};
