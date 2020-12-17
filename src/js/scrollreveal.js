import ScrollReveal from "scrollreveal";

let slideUp = {
    distance: '30%',
    origin: 'bottom',
    opacity: 0.5,
    interval: 200,
    scale:0.9,
    cleanup: true,
};

ScrollReveal().reveal('.slide-up', slideUp);