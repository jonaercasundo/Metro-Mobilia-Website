
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


// Hero video fallback
document.addEventListener('DOMContentLoaded', () => {

    const video = document.getElementById('hero-video');
    const grid = document.getElementById('hero-grid');

    if (!video) {
        return;
    }

    video.addEventListener('playing', () => {
        if (grid) {
            grid.style.opacity = '0';
            grid.style.transition = 'opacity 0.8s ease';
        }
    });

    video.addEventListener('error', () => {
        video.style.display = 'none';
    });

});