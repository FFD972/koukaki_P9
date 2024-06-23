//  P A R A L L A X E  -  D U  -  L O G O 
window.addEventListener('scroll', function() {
    const parallaxLogo = document.querySelector('.banner__logo');
    const scroll = window.scrollY;

    const Value = Math.min(scroll * 0.25,190);
    parallaxLogo.style.transform = 'translateY(' + Value + 'px)';
});



// S E C T I O N  -  A N I M A T I O N 
// Sélection des sections pour animation
const sections = document.querySelectorAll('#story, #characters, #place, #studio, #oscars, footer')
const sectionObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            fadeInAnimation(entry);
            observer.unobserve(entry.target);
        }
    });
});

// Observateur d'intersection à chaque section
sections.forEach((section) => {
    sectionObserver.observe(section);
});

function fadeInAnimation(entry) {
    entry.target.classList.add('fadeIn');
    const title = entry.target.querySelector('h2, h3');

    // Vérification si le titre existe et s'il a du contenu
    if (title && title.textContent) {
        // Division du contenu du titre en mots
        const words = title.textContent.split(' ');

        // Efface le contenu du titre
        title.textContent = '';

        // Ajout du 'span' pour chaque mot + class .titleAnimation
        words.forEach((word) => {
            const span = document.createElement('span');
            span.classList.add('titleAnimation');
            span.textContent = word;
            title.appendChild(span);
        });

        // Sélection de tous les éléments ayant la class 'titleAnimation' (span)
        const spans = title.querySelectorAll('.titleAnimation');

        // Ajout de la class .visibility aux 'span' + délai
        spans.forEach((span, index) => {
            const delay = 500 + index * 500;

            setTimeout(() => {
                span.classList.add('visibility');
            }, delay);
        });
    }
}

