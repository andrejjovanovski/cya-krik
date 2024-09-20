document.addEventListener('DOMContentLoaded', function() {
    const button = document.querySelector('[data-collapse-toggle]');
    const navbar = document.getElementById('navbar-default');
    const img1 = document.querySelector('#logoImg');
    const img2 = document.querySelector('#logoImg2');

    button.addEventListener('click', function() {
        if (navbar.classList.contains('hidden')) {
            navbar.classList.remove('hidden');
            navbar.classList.add('block');
            img1.classList.add('hidden');
            img2.classList.remove('hidden');
        } else {
            navbar.classList.remove('block');
            navbar.classList.add('hidden');
            img1.classList.remove('hidden');
            img2.classList.add('hidden');
        }
    });
});
