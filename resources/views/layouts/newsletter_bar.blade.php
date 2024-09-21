<nav class="bg-black p-3 w-full lg:shadow-bottom fixed top-0 z-50">
    <div class="flex items-center justify-between w-3/4 m-auto hidden md:flex">
        <div class="flex items-center space-x-14">
            <span class="text-white font-medium">NEWSLETTER</span>
            <div>
                <input type="text" id="search-navbar" class="w-full p-1 ps-4 text-sm text-white border-3 border-white rounded-3xl bg-black placeholder-white-500 focus:ring-0 focus:border-white" placeholder="SEARCH">
            </div>
        </div>
        <div class="text-white flex items-center space-x-14 font-medium">
            <div class="language-switcher">
                <a href="#">En</a>/<a href="#">Mkd</a>
            </div>
            <div class="language-switcher">
                <a href="{{route('products.index')}}">E-Shop</a>
            </div>
        </div>
    </div>
</nav>
