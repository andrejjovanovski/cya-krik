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



@endsection

