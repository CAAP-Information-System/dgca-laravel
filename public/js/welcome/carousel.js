// Auto-slider functionality
const radioButtons = document.querySelectorAll('.carousel-radio');
let currentSlide = 0;

function showSlide(index) {
    const items = document.querySelectorAll('.carousel-item');
    items.forEach((item, i) => {
        if (i === index) {
            item.classList.add('active');
            setTimeout(() => {
                item.style.opacity = 1;
            }, 50); // Delay for better transition effect
        } else {
            item.classList.remove('active');
            item.style.opacity = 0;
        }
    });
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % radioButtons.length;
    radioButtons[currentSlide].checked = true;
    showSlide(currentSlide);
}

radioButtons.forEach((button, index) => {
    button.addEventListener('change', () => {
        currentSlide = index;
        showSlide(currentSlide);
    });
});

// Set interval for auto-slide (in milliseconds)
const interval = 5000; // Increased interval for better visibility of slower transition
setInterval(nextSlide, interval);
