/*  Rotation des Fleurs au scroll */
document.addEventListener('DOMContentLoaded', () => {
    const maxDuration = 27;
    const minDuration = 5;

    // Accélération de la vitesse au Scroll
    window.addEventListener('scroll', () => {
        document.documentElement.style.setProperty('--timeSpeedRotate', `${minDuration}s`);
    });

    // Retour à la valeur par défaut
    window.addEventListener("scrollend", (event) => {
        document.documentElement.style.setProperty('--timeSpeedRotate', `${maxDuration}s`);
    });
});