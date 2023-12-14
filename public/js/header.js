const burger_menu = document.querySelector(".burger_menu");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

burger_menu.addEventListener('click', ()=>{
   //Animate Links
    navLinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });

    //Hamburger Animation
    burger_menu.classList.toggle("toggle");
});