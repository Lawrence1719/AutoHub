//Navbar JS
document.addEventListener('DOMContentLoaded', function () {
    var dropdowns = document.querySelectorAll('.dropdown');

    dropdowns.forEach(function (dropdown) {
        dropdown.addEventListener('click', function (event) {
            event.stopPropagation();
            dropdown.classList.toggle('active');
        });
    });

    document.addEventListener('click', function () {
        dropdowns.forEach(function (dropdown) {
            dropdown.classList.remove('active');
        });
    });

    // Prevent click event inside the dropdown content from closing the dropdown
    var dropdownContents = document.querySelectorAll('.dropdown-content');
    dropdownContents.forEach(function (content) {
        content.addEventListener('click', function (event) {
            event.stopPropagation();
        });
    });
});