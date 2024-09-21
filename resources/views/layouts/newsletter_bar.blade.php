<nav class="fixed top-0 z-50 w-full p-3 bg-black lg:shadow-bottom">
    <div class="flex items-center justify-between w-3/4 m-auto md:flex">
        <div class="flex items-center space-x-14">
            <span class="text-white font-medium cursor-pointer hover:text-white hover:opacity-70 transform hover:scale-105 transition-transform ">NEWSLETTER</span>
            <div>
                <input type="text" id="search-navbar" class="w-full p-1 ps-4 text-sm text-white border-3 cursor-pointer border-white rounded-3xl bg-black focus:placeholder-transparent hover:bg-gray-800 focus:bg-black placeholder-white-500 focus:ring-0 focus:border-white " placeholder="SEARCH">
            </div>
        </div>
        <div class="text-white flex items-center space-x-14 font-medium">
            <div class="language-switcher transform hover:scale-110 transition-transform ">
                <a href="#">En</a> /
                <a href="#">Mkd</a>
            </div>
            <div class="language-switcher">
                <a href="{{route('products.index')}}">E-Shop</a>
            </div>
        </div>
    </div>
</nav>