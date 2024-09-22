@extends('layouts.app')
@section('title', 'Donations Page')
@section('content')


<div class="container pt-4 mx-auto font-heading">
    <div class="container">

        <nav class="relative flex justify-center max-w-3xl mx-auto space-x-8 border-b border-lightGray text-m pt-11">
            <a href="#" class="relative px-4 py-4 text-black nav-item hover:text-black" data-header="Годишни извештаи">Годишни извештаи</a>
            <a href="#" class="relative px-4 py-4 text-black nav-item hover:text-black" data-header="Финансиски извештаи">Финансиски извештаи</a>
            <a href="#" class="relative px-4 py-4 text-black nav-item hover:text-black" data-header="Политички документи">Политички документи</a>
            <div class="absolute bottom-0 left-0 h-1 underline transition-all duration-300 ease-in-out bg-orange-500 rounded-full"></div>
        </nav>
</div>













<div class="px-6 py-8">
    <!-- 2023 Section -->
    <div class="mb-12">
      <h2 class="mb-6 text-3xl font-bold">2023 година</h2>
      <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
        <!-- Card 1 -->
        <div class="relative flex flex-col justify-between p-6 bg-white shadow-md rounded-xl h-52">
          <p class="font-semibold text-md">Lorem ipsum dolor sit amet</p>
          <button class="absolute p-2 text-white bg-black rounded-full bottom-4 right-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v12m8-8l-8 8-8-8" />
            </svg>
          </button>
        </div>

        <!-- Repeat Card 2, 3, 4 for more cards... -->
        <div class="relative flex flex-col justify-between p-6 bg-white shadow-md rounded-xl h-52">
          <p class="font-semibold text-md">Lorem ipsum dolor sit amet</p>
          <button class="absolute p-2 text-white bg-black rounded-full bottom-4 right-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v12m8-8l-8 8-8-8" />
            </svg>
          </button>
        </div>

        <div class="relative flex flex-col justify-between p-6 bg-white shadow-md rounded-xl h-52">
          <p class="font-semibold text-md">Lorem ipsum dolor sit amet</p>
          <button class="absolute p-2 text-white bg-black rounded-full bottom-4 right-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v12m8-8l-8 8-8-8" />
            </svg>
          </button>
        </div>

        <div class="relative flex flex-col justify-between p-6 bg-white shadow-md rounded-xl h-52">
          <p class="font-semibold text-md">Lorem ipsum dolor sit amet</p>
          <button class="absolute p-2 text-white bg-black rounded-full bottom-4 right-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v12m8-8l-8 8-8-8" />
            </svg>
          </button>
        </div>
      </div>

      <!-- View All Button -->
      <div class="flex justify-end mt-6">
        <x-purple-btn>text</x-purple-btn>
      </div>
    </div>

    <!-- 2022 Section (repeat the same structure for other years) -->
    <div class="mb-12">
      <h2 class="mb-6 text-3xl font-bold">2022 година</h2>
      <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
        <!-- Card 1 -->
        <div class="relative flex flex-col justify-between p-6 bg-white shadow-md rounded-xl h-52">
          <p class="font-semibold text-md">Lorem ipsum dolor sit amet</p>
          <button class="absolute p-2 text-white bg-black rounded-full bottom-4 right-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v12m8-8l-8 8-8-8" />
            </svg>
          </button>
        </div>

        <!-- Repeat Card 2, 3, 4 for more cards... -->
        <div class="relative flex flex-col justify-between p-6 bg-white shadow-md rounded-xl h-52">
          <p class="font-semibold text-md">Lorem ipsum dolor sit amet</p>
          <button class="absolute p-2 text-white bg-black rounded-full bottom-4 right-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v12m8-8l-8 8-8-8" />
            </svg>
          </button>
        </div>

        <div class="relative flex flex-col justify-between p-6 bg-white shadow-md rounded-xl h-52">
          <p class="font-semibold text-md">Lorem ipsum dolor sit amet</p>
          <button class="absolute p-2 text-white bg-black rounded-full bottom-4 right-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v12m8-8l-8 8-8-8" />
            </svg>
          </button>
        </div>

        <div class="relative flex flex-col justify-between p-6 bg-white shadow-md rounded-xl h-52">
          <p class="font-semibold text-md">Lorem ipsum dolor sit amet</p>
          <button class="absolute p-2 text-white bg-black rounded-full bottom-4 right-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v12m8-8l-8 8-8-8" />
            </svg>
          </button>
        </div>
      </div>

      <!-- View All Button for 2022 -->
      <div class="flex justify-end mt-6">
        <button class="px-6 py-3 font-semibold text-purple-700 bg-purple-700 rounded-lg bg">
          Види ги сите
        </button>
      </div>
    </div>

    <!-- 2021 Section (repeat as needed) -->
    <div class="mb-12">
      <h2 class="mb-6 text-3xl font-bold">2021 година</h2>
      <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
        <!-- Card 1 -->
        <div class="relative flex flex-col justify-between p-6 bg-white shadow-md rounded-xl h-52">
          <p class="font-semibold text-md">Lorem ipsum dolor sit amet</p>
          <button class="absolute p-2 text-white bg-black rounded-full bottom-4 right-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v12m8-8l-8 8-8-8" />
            </svg>
          </button>
        </div>

        <!-- Repeat Card 2, 3, 4 for more cards... -->
        <div class="relative flex flex-col justify-between p-6 bg-white shadow-md rounded-xl h-52">
          <p class="font-semibold text-md">Lorem ipsum dolor sit amet</p>
          <button class="absolute p-2 text-white bg-black rounded-full bottom-4 right-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v12m8-8l-8 8-8-8" />
            </svg>
          </button>
        </div>

        <div class="relative flex flex-col justify-between p-6 bg-white shadow-md rounded-xl h-52">
          <p class="font-semibold text-md">Lorem ipsum dolor sit amet</p>
          <button class="absolute p-2 text-white bg-black rounded-full bottom-4 right-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v12m8-8l-8 8-8-8" />
            </svg>
          </button>
        </div>

        <div class="relative flex flex-col justify-between p-6 bg-white shadow-md rounded-xl h-52">
          <p class="font-semibold text-md">Lorem ipsum dolor sit amet</p>
          <button class="absolute p-2 text-white bg-black rounded-full bottom-4 right-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v12m8-8l-8 8-8-8" />
            </svg>
          </button>
        </div>
      </div>

      <!-- View All Button for 2021 -->
      <div class="flex justify-end mt-6">
        <button class="px-6 py-3 font-semibold text-purple-700 bg-purple-200 rounded-lg">
          Види ги сите
        </button>
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

    underline.style.transform = `translateX(${offsetLeft - 100}px)`;
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
