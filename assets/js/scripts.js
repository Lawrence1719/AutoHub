//Navbar JS
document.addEventListener('DOMContentLoaded', function () {
    // Toggle the dropdown menus
    var dropdowns = document.querySelectorAll('.dropdown-toggle');

    dropdowns.forEach(function (dropdown) {
        dropdown.addEventListener('click', function (event) {
            event.stopPropagation();
            var target = dropdown.nextElementSibling;
            if (target.classList.contains('show')) {
                target.classList.remove('show');
            } else {
                closeAllDropdowns();
                target.classList.add('show');
            }
        });
    });

    document.addEventListener('click', function () {
        closeAllDropdowns();
    });

    function closeAllDropdowns() {
        var dropdownMenus = document.querySelectorAll('.dropdown-menu');
        dropdownMenus.forEach(function (menu) {
            menu.classList.remove('show');
        });
    }
});
