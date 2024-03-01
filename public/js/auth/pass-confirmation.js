$(document).ready(function() {
    // Function to validate passwords
    function validatePassword() {
        var password = $('#password').val();
        var confirmPassword = $('#password-confirm').val();

        if (password !== confirmPassword) {
            $('#password-confirm').addClass('is-invalid');
            $('#password-confirm-error').text('Passwords do not match');
        } else {
            $('#password-confirm').removeClass('is-invalid');
            $('#password-confirm-error').text('');
        }
    }

    // Validate passwords on input event
    $('#password, #password-confirm').on('input', validatePassword);
});
