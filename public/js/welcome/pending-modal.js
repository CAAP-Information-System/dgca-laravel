// Use this script if you are using Bootstrap 5
document.addEventListener("DOMContentLoaded", function () {
    var myModal = new bootstrap.Modal(document.getElementById("myModal"));

    myModal.show();

    // Close the modal when clicking the close button
    var closeButton = document.getElementById("closeButton");
    closeButton.addEventListener("click", function () {
        myModal.hide();
    });
});
