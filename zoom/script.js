const zoomableImages = document.querySelectorAll('.zoomable');
const fullscreen = document.querySelector('.fullscreen');
const fullscreenImage = document.getElementById('fullscreen-image');
const closeFullscreen = document.querySelector('.close-fullscreen');

zoomableImages.forEach((image) => {
    image.addEventListener('click', () => {
        fullscreenImage.src = image.src;
        fullscreen.style.display = 'block';
    });
});

closeFullscreen.addEventListener('click', () => {
    fullscreen.style.display = 'none';
});
