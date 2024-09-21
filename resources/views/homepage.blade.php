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


@endsection

