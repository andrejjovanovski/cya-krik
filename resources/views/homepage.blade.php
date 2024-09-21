@extends('layouts.app')


@section('title', 'Home Page')

@section('content')

    {{--    font needs to be fixed --}}
    {{--    responsive version needs to be fixed --}}


    {{--    Hero Section  --}}

    <header
        {{--        needs to be fixed: title and the colors of the button--}}

        class="bg-cover  min-h-screen   flex justify-center py-40 bg-[url('/public/images/Homepage/herosection_1920x1120px.jpg')] relative  ">
        <div class="container flex-col justify-center w-80 ">
            <h1 class=" text-5xl  md:text-4xl lg:text-5xl font-bold text-center uppercase">промената доаѓа од
                младите </h1>
            <h2 class=" text-2xl  md:text-3l lg:text-3l font-bold text-center py-10 capitalize">кој сме ние? </h2>
            <p class="text-center  ">Центарот за младинкси активизам Крик е невладина , непрофитна организација основана
                од млади луѓе, предводена од млади луѓе и работи за и со млади луѓе.</p>

            {{--             this button should redirect to about us page --}}
            <x-purple-btn class="mt-5"><a href="">Повеќе за нас</a></x-purple-btn>
        </div>


        {{--        Naskoro section --}}

        <section class="flex flex-row  absolute left-1/2 transform -translate-x-1/2 bottom-[-350px]
 ">
            <div class="container bg-black p-10 rounded-l-3xl ">
                <h3 class="text-orange mt-5 uppercase">Наскоро</h3>
                <h4 class="text-whiteBackground mt-5">Нижеме заедно</h4>
                <p class="text-lightGray mt-5">
                    Проектот ""Еднакви можности за девојчињата и младите жени во Северна Македонија" го спроведуваат
                    Националниот младински совет на Македонија и Stella Network, со финансиска поддршка од страна на
                    Британската амбасада во Скопје.
                </p>
                <div class="flex space-x-8">

                    {{--                                        missing routes for these buttons--}}
                    <x-orange-btn class="mt-5 font-bold"><a href="">Види Повеќе</a></x-orange-btn>
                    <x-purple-btn class="mt-5"><a href="">Пријави се</a></x-purple-btn>
                </div>
            </div>


            <div
                class="container  flex justify-end rounded-r-3xl   bg-cover bg-center bg-no-repeat bg-[url('/public/images/Homepage/homepage_nastan_750x655px.jpg')]"
            >
                <div class="container bg-black w-20 h-20 rounded-xl p-3 flex flex-col ">
                    <p class="text-lightGray text-center font-bold mb-0">23</p>
                    <p class="text-lightGray text-center font-bold">Септ</p>
                </div>
            </div>
        </section>
    </header>

    <div class="h-[400px]"></div>

    {{--    Numbers section --}}

    <hr class=" h-0.5 bg-black ">

    <section class=" flex justify-center content-center p-10 text-center">

        <div class="container content-center flex-wrap">
            <p class=" text-red font-extrabold text-5xl">320+</p>
            <p class="text-red capitalize">проекти</p>
        </div>
        <div class="container  content-center">
            <p class="font-bold text-red text-5xl">580+</p>
            <p class="text-red capitalize">волонтери</p>
        </div>
        <div class="container  content-center">
            <p class="font-bold text-red text-5xl">25+</p>
            <p class="text-red capitalize">партнери</p>
        </div>

    </section>
    <hr class=" h-0.5 bg-black ">

    {{--    vide section and стани волонтер  --}}

    <section class="flex justify-center content-center p-10 flex-wrap">
        <div class="container  justify-center ml-auto grid grid-cols-1 md:grid-cols-2 gap-8 ">
            <div class="shadow-lg p-8 rounded-xl" >
                <video class="w-full rounded-lg" controls>
                    <source src="" type="video/mp4">
                    video
                </video>
            </div>


            <div class="flex flex-col justify-between w-2/4  shadow-lg p-8 bg-black rounded-3xl" >
                <h3 class="text-4xl font-bold mb-4 text-white">Стани волонтер</h3>
                <p class="text-lg mb-6 capitalize text-lightGray">сакаш да работиш со млади лица? оваа можност е токму за тебе.</p>
                <div class="flex">
                    <button class="inline-block border-2 border-white text-white py-2 px-3 rounded-3xl capitalize text-center font-bold transition duration-300 ease-in-out hover:bg-white hover:text-black"><a href="" >придружи ни се</a></button>

                </div>
            </div>
        </div>
    </section>

    {{--    news with slider --}}
<div class="container mx-auto py-5 mb-0">
    <h1 class="font-bold text-5xl ">Најнови Вести</h1>
</div>
{{--    needs to be fixed: date  yellow text in the image part--}}

{{--    image card section --}}
    <section class="flex justify-center gap-6 py-20 ">
        <div class="max-w-sm   rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700 bg-[url('/public/images/Homepage/homepage_card_2.jpg')] bg-cover bg-center" >
{{--            by clicking on card user should be redirected to to project page--}}
            <a href="#">
            </a>
            <div class="p-6 shadow-black flex-col flex justify-end content-end mt-52 ">
                <p class="mb-3  uppercase bg-orange text-black  rounded-full font-bold text-center w-30">активност eco-action </p>
                <p class="mb-3   text-lightGray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, itaque.</p>
                <a href="#" class="inline-flex items-center text-lightGray capitalize">
                    види повеќе
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>

        </div>

        <div class="max-w-sm  rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700 bg-[url('/public/images/Homepage/homepage_card_2.jpg')] bg-cover bg-center" >
{{--            by clicking on card user should be redirected to to project page--}}
            <a href="#">
            </a>
            <div class="p-6 shadow-lg flex-col flex justify-end content-end mt-52 ">
                <p class="mb-3  uppercase bg-orange text-black  rounded-full font-bold text-center w-30">активност eco-action </p>
                <p class="mb-3   text-lightGray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, itaque.</p>
                <a href="#" class="inline-flex items-center text-lightGray capitalize">
                    види повеќе
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>

        </div>
        <div class="max-w-sm   rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700 bg-[url('/public/images/Homepage/homepage_card_3.jpg')] bg-cover bg-center" >

{{--            by clicking on card user should be redirected to to project page--}}
            <a href="#">
            </a>
            <div class="p-6 shadow-2xl flex-col flex justify-end content-end mt-52 ">
                <p class="mb-3  uppercase bg-orange text-black  rounded-full font-bold text-center w-30">активност eco-action </p>
                <p class="mb-3   text-lightGray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, itaque.</p>
                <a href="#" class="inline-flex items-center text-lightGray capitalize">
                    види повеќе
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>


        <div class="max-w-sm   rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700 bg-[url('/public/images/Homepage/homepage_card_4.jpg')] bg-cover bg-center" >
{{--            by clicking on card user should be redirected to to project page--}}
            <a href="#">
            </a>
            <div class="p-6 shadow-lg flex-col flex justify-end content-end mt-52 ">
                <p class="mb-3  uppercase bg-orange text-black  rounded-full font-bold text-center w-30">активност eco-action </p>
                <p class="mb-3   text-lightGray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, itaque.</p>
                <a href="#" class="inline-flex items-center text-lightGray capitalize">
                    види повеќе
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="max-w-sm   rounded-2xl shadow dark:bg-gray-800 dark:border-gray-700 bg-[url('/public/images/Homepage/homepage_card_2.jpg')] bg-cover bg-center" >
{{--            by clicking on card user should be redirected to to project page--}}
            <a href="#">
            </a>
            <div class="p-6 shadow-lg flex-col flex justify-end content-end mt-52 ">
                <p class="mb-3  uppercase bg-orange text-black  rounded-full font-bold text-center w-30">активност eco-action </p>
                <p class="mb-3   text-lightGray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, itaque.</p>
                <a href="#" class="inline-flex items-center text-lightGray capitalize">
                    види повеќе
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>

        </div>

    </section>

{{--    missing slider for the images :( --}}

    <div class=" containter flex flex-row justify-end">
        <div class="flex mb-10">

        <x-purple-btn><a href="">Види за цел Месец</a></x-purple-btn>
        </div>
    </div>




@endsection

