/*Effet fade sur les H2 et H3 */
document.addEventListener("DOMContentLoaded", function() {
 /* console.log("bonjour");*/
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('infade-transition');
            } else {
               /* entry.target.classList.remove('infade-transition');*/
            }
        });
    }, { threshold: 0.5 }); 

    document.querySelectorAll('.infade').forEach(element => {
        observer.observe(element);
    });
});   

 /*Parallax logo*/
 
var s = skrollr.init();

if (s.isMobile()) {
    s.destroy();
}

/* SwiperJS */

const swiper = new Swiper ('.swiper-container', {
    direction: 'horizontal',
    centeredSlides: true,
    slidesPerView: "auto",
    speed: 1000,
    autoplay: {
        delay: 1000,
        disableOnInteraction: false,
    },
    loop: true,
    effect: "coverflow",
    coverflowEffect: {
        slideShadows: false,
        rotate: 70,
        stretch: 0,
        depth: 50,
        modifier: 1, 
    },
})


/* Scroll nuage */
window.addEventListener('scroll', function () {

    const grandNuage = document.querySelector('.grand-nuage');
    const petitNuage = document.querySelector('.petit-nuage');
    const placeSection = document.querySelector('#place');

    // Récupère la position verticale de l'élément avec l'id 'place' par rapport au haut de la page.
    const sectionOffsetTop = placeSection.offsetTop;
    // Obtenez la position actuelle de défilement de la fenêtre.
    const scrollPosition = window.scrollY || document.documentElement.scrollTop;

    // Vérifie si la position verticale de défilement a atteint ou est supérieur à la position de l'élément avec l'id 'place'
    if (scrollPosition >= sectionOffsetTop) {

    // Calculez la valeur de parallaxe, qui est la différence entre la position de défilement et le haut relatif, divisée par 4.
        const parallaxValue = (scrollPosition - sectionOffsetTop) / 4;
        const translationX = Math.min(parallaxValue, 300);

        grandNuage.style.transform = 'translateX(' + (-translationX) + 'px)';
        petitNuage.style.transform = 'translateX(' + (-translationX) + 'px)';
    }
});

//Ouverture Menu Burger

const navbarBurger = document.querySelector('.navbar-burger');
const burgerOn = document.querySelector('.burger-on');
const menuLinks = burgerOn.querySelectorAll('a');

navbarBurger.addEventListener('click', () => {
    navbarBurger.classList.toggle('active');
    burgerOn.classList.toggle('open');
});

menuLinks.forEach(link => {
    link.addEventListener('click', () => {
        burgerOn.classList.remove('open');
        navbarBurger.classList.remove('active');
    });
});
