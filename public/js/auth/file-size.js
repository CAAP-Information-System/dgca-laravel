$(document).ready(function() {
    // Validate file size on file selection
    $('#passport_photo').on('change', function() {
        var maxSizeInBytes = 10 * 1024 * 1024; // 10MB
        var fileSize = this.files[0].size;

        if (fileSize > maxSizeInBytes) {
            $('#passport_photo').addClass('is-invalid');
            $('#passport_photo_error').text('File size must not exceed 10MB');
            $('#passport_photo').val(''); // Clear file input
        } else {
            $('#passport_photo').removeClass('is-invalid');
            $('#passport_photo_error').text('');
        }
    });
});
