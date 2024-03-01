document.addEventListener("DOMContentLoaded", () => {
    const passwordInput = document.getElementById("password");
    const passwordStrength = document.getElementById("password-strength");

    passwordInput.addEventListener("input", () => {
        validatePassword(passwordInput.value);
    });

    function validatePassword(password) {
        // Define your password strength criteria
        const lengthRegex = /.{8,}/;
        const letterRegex = /[A-Za-z]/;
        const numberRegex = /\d/;
        const specialCharRegex = /[!@#$%^&*(),.?":{}|<>]/;

        // Check each criterion
        const isLengthValid = lengthRegex.test(password);
        const isLetterValid = letterRegex.test(password);
        const isNumberValid = numberRegex.test(password);
        const isSpecialCharValid = specialCharRegex.test(password);

        // Update the UI based on the criteria
        document.getElementById("length").classList.toggle("valid", isLengthValid);
        document.getElementById("letter").classList.toggle("valid", isLetterValid);
        document.getElementById("number").classList.toggle("valid", isNumberValid);
        document.getElementById("specialChar").classList.toggle("valid", isSpecialCharValid);

        // Calculate overall password strength
        const strength = (isLengthValid + isLetterValid + isNumberValid + isSpecialCharValid) / 4 * 100;
        passwordStrength.style.width = strength + "%";
    }
});
