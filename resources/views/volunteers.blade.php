@extends('layouts.app')
@section('title', 'Volunteers Page')
@section('content')

    <h1 class="text-5xl font-semibold text-center py-10 mt-10">Нашите Волонтери!</h1>
    <div class="m-auto w-3/4">
        <nav class="relative flex w-full space-x-4 border-b border-lightGray">
            <a href="#"
               class="text-center w-1/2 relative px-4 py-5 text-black nav-item_ilija hover:text-black text-2xl font-semibold"
               data-form="long_term">Долг Рок</a>
            <a href="#"
               class="text-center w-1/2 relative px-4 py-5 text-black nav-item_ilija hover:text-black text-2xl font-semibold"
               data-form="short_term">Краток Рок</a>
            <div
                class="absolute bottom-0 left-0 h-2 underline_ilija transition-all duration-300 ease-in-out bg-orange-500 rounded-full"></div>
        </nav>
    </div>

    <div class="max-w-7xl mx-auto">
        <div id="long_term" class="grid grid-cols-4 gap-4 mt-5">
            @foreach ($volunteers as $volunteer)
                @if ($volunteer->is_longterm === 1)
                    <div class="col-span-1">
                        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                            <a href="#">
                                <img class="rounded-t-lg" src="{{ $volunteer->image }}" alt=""/>
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight">Noteworthy technology
                                        acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology
                                    acquisitions of 2021 so far, in reverse chronological order.</p>
                                <a href="#"
                                   class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>


    <div id="short_term" class="container mx-auto p-8 w-3/4 hidden">

        Temporarily hidden content for Form 2. Lorem ipsum dolor sit amet.lorem50 Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Fugit perferendis repellat ullam dolorem iste quia natus obcaecati cumque accusamus. Nihil,
        fuga quasi. Quibusdam vitae laboriosam at velit aliquam repellendus qui rem sequi a, non aspernatur minus
        ducimus animi unde ipsa natus temporibus iste quo nisi? Et tenetur ab vel molestiae.
    </div>
    </div>

    <script>
        document.querySelectorAll('.nav-item_ilija').forEach(item => {
            item.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelectorAll('#long_term, #short_term').forEach(form => {
                    form.classList.add('hidden');
                });
                const selectedForm = document.getElementById(this.getAttribute('data-form'));
                selectedForm.classList.remove('hidden');
                const underline = document.querySelector('.underline_ilija');
                const navItemRect = this.getBoundingClientRect();
                const parentNavRect = this.parentElement.getBoundingClientRect();
            });
        });
    </script>

@endsection
