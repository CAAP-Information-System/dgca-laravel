var i = 0;
var texts = ['Sustainable', 'Resilient', 'Inclusive'];
var speed = 100;
var currentTextIndex = 0;
var isDeleting = false;

function typeWriter() {
    var currentText = texts[currentTextIndex];
    if (!isDeleting && i < currentText.length) {
        document.getElementById("theme__input").innerHTML += currentText.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    } else if (isDeleting && i >= 0) {
        var str = document.getElementById("theme__input").innerHTML;
        var newStr = str.substring(0, i - 1);
        document.getElementById("theme__input").innerHTML = newStr;
        i--;
        setTimeout(typeWriter, speed);
    } else {
        isDeleting = !isDeleting;
        if (!isDeleting) {
            currentTextIndex = (currentTextIndex + 1) % texts.length;
        }
        setTimeout(typeWriter, 1000); // Delay before typing/deleting next text
    }
}

typeWriter(); // Start the typing loop automatically
