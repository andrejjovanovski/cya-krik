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
document.addEventListener("DOMContentLoaded", function () {
    const navItems = document.querySelectorAll(".nav-item");
    const underline = document.querySelector(".underline");
    const forms = document.querySelectorAll(".form");
    let activeItem = navItems[0];

    function moveUnderline(item) {
        const itemRect = item.getBoundingClientRect();
        const containerRect = item.parentElement.getBoundingClientRect();


        const offsetLeft = itemRect.left - containerRect.left + item.parentElement.scrollLeft;
        const itemWidth = itemRect.width;

        underline.style.transform = `translateX(${offsetLeft}px)`;
        underline.style.width = `${itemWidth}px`;
    }

    function showForm(formId) {
        forms.forEach(form => {
            form.classList.add('hidden');
        });
        const activeForm = document.getElementById(formId);
        if (activeForm) {
            activeForm.classList.remove('hidden');
        }
    }

    navItems.forEach((item) => {
        item.addEventListener("click", (e) => {
            e.preventDefault();
            const formId = item.getAttribute("data-form");
            navItems.forEach(i => i.classList.remove('active'));
            item.classList.add('active');
            activeItem = item;
            moveUnderline(item);
            showForm(formId);
        });

        item.addEventListener("mouseenter", () => {
            moveUnderline(item);
        });

        item.addEventListener("mouseleave", () => {
            moveUnderline(activeItem);
        });
    });

    moveUnderline(activeItem);
    showForm(activeItem.getAttribute("data-form"));
});
const radios = document.querySelectorAll('input[name="amount"]');
const toggleButtons = document.querySelectorAll('.toggle-btn');
radios.forEach((radio, index) => {
    radio.addEventListener('change', function () {
        toggleButtons.forEach((btn, i) => {
            if (i === index) {
                btn.classList.remove('border-black', 'text-black');
                btn.classList.add('bg-black', 'text-white');
            } else {
                btn.classList.remove('bg-black', 'text-white');
                btn.classList.add('border-black', 'text-black');
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const donationFormDiv = document.getElementById('form-donation-div');
    const firstDonationForm = document.getElementById('form_donations');

    donationFormDiv.style.display = 'none';

    firstDonationForm.addEventListener('submit', function (event) {
        event.preventDefault();
        donationFormDiv.style.display = 'block';
    });
});
