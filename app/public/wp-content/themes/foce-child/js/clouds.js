// A N I M A T I O N   D E S   N U A G E S

window.addEventListener('scroll', function () {
    const big = document.querySelector('.cloud_big');
    const little = document.querySelector('.cloud_little');
    const container_cloud = document.querySelector('#place');
    const sectionOffsetTop = container_cloud.offsetTop;
    const scrollPosition = window.scrollY || document.documentElement.scrollTop;


    // Si la position actuelle est supérieure ou égale à position verticale
    if (scrollPosition >= sectionOffsetTop) {

        // Calcul de la valeur de défilement, déterminant l'intensité du déplacement des nuages
        const parallaxValue = (scrollPosition - sectionOffsetTop) / 2;  // vitesse

        // Déplacement de 300px.
        const translationX = Math.min(parallaxValue, 300);
        big.style.transform = 'translateX(' + (-translationX) + 'px)'; // Ajustement + et - 
        little.style.transform = 'translateX(' + (-translationX) + 'px)';
    }
});