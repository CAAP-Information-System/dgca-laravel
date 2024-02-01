$(document).ready(function () {
    // Function to check fade on scroll
    function checkFade() {
        $(".fade-in-section").each(function () {
            var sectionTop = $(this).offset().top;
            var windowHeight = $(window).height();

            if (sectionTop < windowHeight - 100) {
                $(this).addClass("fade-in");
            }
        });
    }

    // Initial check when the page loads
    checkFade();

    // Check fade on scroll
    $(window).scroll(checkFade);
});

document.addEventListener("DOMContentLoaded", function () {
    const slideImages = document.querySelector(".slide-images");
    const imgContainerWidth =
        document.querySelector(".img-container").offsetWidth;

    function nextSlide() {
        const currentTranslate = getTranslateValue();
        const newTranslate = currentTranslate - imgContainerWidth;

        // Check if it's the last image
        if (
            newTranslate <
            -(imgContainerWidth * (slideImages.children.length - 1))
        ) {
            slideImages.style.transition = "none";
            slideImages.style.transform = "translateX(0)";
            // Trigger reflow to reset the transition
            void slideImages.offsetWidth;
            slideImages.style.transition = "transform 1s ease-in-out";
        } else {
            slideImages.style.transform = `translateX(${newTranslate}px)`;
        }
    }

    function getTranslateValue() {
        const transformValue = window
            .getComputedStyle(slideImages)
            .getPropertyValue("transform");
        const matrix = new DOMMatrix(transformValue);
        return matrix.m41;
    }

    setInterval(nextSlide, 3000); // Change slide every 3 seconds
});

(function () {
    const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

    // Set the countdown end date to October 15, 2024
    const countDownDate = new Date("October 14, 2024 00:00:00").getTime();

    const x = setInterval(function () {
        const now = new Date().getTime();
        const distance = countDownDate - now;

        document.getElementById("days").innerText = Math.floor(distance / day);
        document.getElementById("hours").innerText = Math.floor(
            (distance % day) / hour
        );
        document.getElementById("minutes").innerText = Math.floor(
            (distance % hour) / minute
        );
        document.getElementById("seconds").innerText = Math.floor(
            (distance % minute) / second
        );

        // do something later when date is reached
        if (distance < 0) {
            document.getElementById("headline").innerText =
                "Let the Event Commence!";
            document.getElementById("countdown").style.display = "none";
            document.getElementById("content").style.display = "block";
            clearInterval(x);
        }
    }, 0);
})();
