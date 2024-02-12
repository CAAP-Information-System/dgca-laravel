document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
        document.getElementById("preloader").style.display = "none";
        document.querySelector(".content").style.display = "block";
    }, 1000);
});
