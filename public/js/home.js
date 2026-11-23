
document.addEventListener('DOMContentLoaded', function () {

    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');

    const nextButton = document.querySelector('.next');
    const prevButton = document.querySelector('.prev');

    let currentIndex = 0;
    let sliderTimer;

    // Display the selected slide
    function showSlide(index) {

        slides.forEach(slide => {
            slide.classList.remove('active');
        });

        dots.forEach(dot => {
            dot.classList.remove('active');
        });

        slides[index].classList.add('active');
        dots[index].classList.add('active');

        currentIndex = index;
    }

    // Move to the next image
    function nextSlide() {
        let nextIndex = (currentIndex + 1) % slides.length;
        showSlide(nextIndex);
    }

    // Move to the previous image
    function previousSlide() {
        let previousIndex =
            (currentIndex - 1 + slides.length) % slides.length;

        showSlide(previousIndex);
    }

    // Automatically change images every 4 seconds
    function startSlider() {
        clearInterval(sliderTimer);
        sliderTimer = setInterval(nextSlide, 4000);
    }

    // Next button
    nextButton.addEventListener('click', function () {
        nextSlide();
        startSlider();
    });

    // Previous button
    prevButton.addEventListener('click', function () {
        previousSlide();
        startSlider();
    });

    // Clickable navigation dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', function () {
            showSlide(index);
            startSlider();
        });
    });

    // Start automatic slideshow
    startSlider();

});
