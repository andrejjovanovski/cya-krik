<div class="pt-8 lg:pt-16 md:pt-16 sm:pt-10 pb-1 bg-orange w-full fixed z-40 top-0">
    <div class="relative flex items-center justify-between w-3/4 m-auto">
        <img id="logoImg" class="h-16 w-16" src="{{ asset('images/Крик-лого.png') }}" alt="Main Logo">
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-black-500 rounded-lg md:hidden hover:bg-black-100 focus:outline-none dark:text-black-400 dark:hover:bg-black-700 dark:focus:ring-black-600 absolute right-0 top-0 mt-3 mr-3" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path class="path" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>

        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="text-black flex flex-col p-4 md:p-0 md:flex-row md:space-x-2 rtl:space-x-reverse md:mt-0">
                <img id="logoImg2" class="h-16 w-16 hidden" src="{{ asset('images/Крик-лого.png') }}" alt="Secondary Logo">
                <li>
                    <a href="#" class="font-semibold text-lg block py-2 px-4">За нас</a>
                </li>
                <li>
                    <a href="#" class="font-semibold text-lg block py-2 px-4">Услуги</a>
                </li>
                <li>
                    <a href="#" class="font-semibold text-lg block py-2 px-4">Проекти</a>
                </li>
                <li>
                    <a href="#" class="font-semibold text-lg block py-2 px-4">Контакт</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-4 text-white bg-black rounded-full font-thin">Донирај</a>
                </li>
            </ul>
        </div>
    </div>
</div>
