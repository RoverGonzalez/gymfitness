function gymWordPress() {
    if(document.querySelector('.swiper')) {
        const opciones = {
            loop: true, 
            autoplay: {
                delay: 3000
            }
        }
        new Swiper('.swiper', opciones);
    }

    var textWrapper = document.querySelector('.ml14 .letters');
    if(textWrapper){
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: true})
        .add({
            targets: '.ml14 .line',
            scaleX: [0,1],
            opacity: [0.5,1],
            easing: "easeInOutExpo",
            duration: 900
        }).add({
            targets: '.ml14 .letter',
            opacity: [0,1],
            translateX: [40,0],
            translateZ: 0,
            scaleX: [0.3, 1],
            easing: "easeOutExpo",
            duration: 800,
            offset: '-=600',
            delay: (el, i) => 150 + 25 * i
        }).add({
            targets: '.ml14',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
    }

    const hamburguer = document.querySelector('.hamburguer-menu svg');
    hamburguer.addEventListener('click', function() {
        const menuPrincipal = document.querySelector('.contenedor-menu');
        menuPrincipal.classList.toggle('mostrar');
    });
}

document.addEventListener('DOMContentLoaded', gymWordPress);

window.onscroll = function() {
    const scroll = window.scrollY;

    const barraNav = document.querySelector('.barra-navegacion');

    if(scroll > 500) {
        barraNav.classList.add('fixed-top');
    }else{
        barraNav.classList.remove('fixed-top');
    }
}