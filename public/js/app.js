document.addEventListener('DOMContentLoaded', function () {
    const button = document.querySelector('[data-collapse-toggle]');
    const navbar = document.getElementById('navbar-default');
    const img1 = document.querySelector('#logoImg');
    const img2 = document.querySelector('#logoImg2');
    const dropdownBtn = document.getElementById('dropdownBtn');
    const customDropdown = document.getElementById('customDropdown');
    const arrowDropDown = document.getElementById('arrow'); // Get the arrow element

    button.addEventListener('click', function () {
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


    dropdownBtn.addEventListener('click', () => {
        dropdownBtn.style.backgroundColor = '#191919';
        dropdownBtn.style.color = '#FBF8F4';
        customDropdown.classList.toggle('hidden');
        dropdownBtn.style.borderTopLeftRadius = '55px';
        dropdownBtn.style.borderTopRightRadius = '55px';

        // Toggle arrow visibility
        arrowDropDown.style.display = 'block';
    });

    window.addEventListener('click', (e) => {
        if (!e.target.closest('.dropdown-container')) {
            customDropdown.classList.add('hidden');
        }
    });

    customDropdown.addEventListener('mouseleave', () => {
        customDropdown.classList.add('hidden');
        dropdownBtn.style.backgroundColor = '#FBB13C';
        dropdownBtn.style.color = '#191919';
        arrowDropDown.style.display = 'none';
        dropdownBtn.style.borderRadius = '30px';

    });

    let liElements = document.querySelectorAll('.li-elements');
    liElements.forEach((li) => {
        li.addEventListener('click', () => {
            li.style.color = 'white';
            li.style.backgroundColor = 'black';
            setTimeout(() => {
                li.style.color = '';
                li.style.backgroundColor = '';
            }, 100);
        });
    });
});
