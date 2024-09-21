

@extends('layouts.app')
@section('title', 'Services Page')
@section('content')



    <div class="container pt-4 mx-auto font-heading">
        <div class="container">

        <nav class="relative flex justify-center mx-5 space-x-4 border-b border-lightGray text-m pt-11">
            <a href="#" class="relative px-4 py-2 text-black nav-item hover:text-black" data-header="Центар Крикни">Центар Крикни</a>
            <a href="#" class="relative px-4 py-2 text-black nav-item hover:text-black" data-header="Независни Станбени Единици">Независни Станбени Единици</a>
            <a href="#" class="relative px-4 py-2 text-black nav-item hover:text-black" data-header="Советујалите">Советујалите</a>
            <div class="absolute bottom-0 left-0 h-1 underline transition-all duration-300 ease-in-out bg-orange-500 rounded-full"></div>
        </nav>
    </div>
        <div class="mt-20">
            <h1 id="header-title" class="text-2xl font-bold text-gray-800">Центар Крикни</h1>
            <p class="mt-10 font-sans text-xs text-gray-600">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio officiis quae vel explicabo laudantium dicta beatae perferendis nostrum, cumque quo perspiciatis voluptas, reiciendis culpa unde ad eveniet soluta sint. Modi ducimus eligendi illo illum harum maxime? Velit corrupti aliquid perferendis enim, quis repudiandae ducimus sequi, magni facilis, unde eaque provident dignissimos dolorum. Repudiandae eaque, quisquam corporis perspiciatis corrupti eum impedit.
            </p>
        </div>

        <div class="my-20">
            <h2 class="font-semibold text-gray-800 text-m">Галерија Со Активности</h2>
            <div class="grid grid-cols-3 gap-4 mt-6">
                <div class="overflow-hidden rounded">
                    <img src="{{ asset('images/Rectangle 11.png') }}" class="w-full h-auto">
                </div>
                <div class="col-span-2 overflow-hidden rounded grayscale">
                    <img src="{{ asset('images/centar krikni 2 3.png') }}" class="w-full h-auto">
                </div>
                <div class="overflow-hidden rounded grayscale">
                    <img src="{{ asset('images/Rectangle 21.png') }}" class="w-full h-auto">
                </div>
                <div class="overflow-hidden rounded">
                    <img src="{{ asset('images/Rectangle 22.png') }}" class="w-full h-auto">
                </div>
                <div class="overflow-hidden rounded">
                    <img src="{{ asset('images/Rectangle 23.png') }}" class="w-full h-auto">
                </div>
            </div>
        </div>
    </div>

    <script>
       document.addEventListener("DOMContentLoaded", function () {
    const navItems = document.querySelectorAll(".nav-item");
    const underline = document.querySelector(".underline");
    const headerTitle = document.getElementById("header-title");
    let activeItem = navItems[0];

    function moveUnderline(item) {
        const itemRect = item.getBoundingClientRect();
        const containerRect = item.parentElement.getBoundingClientRect();
        let offsetLeft = itemRect.left - containerRect.left;
        let itemWidth = itemRect.width;

        underline.style.transform = `translateX(${offsetLeft - 30}px)`;
        underline.style.width = `${itemWidth + 30}px`;
    }

    navItems.forEach((item) => {
        item.addEventListener("click", () => {
            headerTitle.textContent = item.getAttribute("data-header");
            navItems.forEach(i => i.classList.remove('active'));
            item.classList.add('active');
            activeItem = item;
            moveUnderline(item);
        });

        item.addEventListener("mouseenter", () => {
            moveUnderline(item);
        });

        item.addEventListener("mouseleave", () => {
            moveUnderline(activeItem);
        });
    });


    moveUnderline(activeItem);
});
    </script>

@endsection
