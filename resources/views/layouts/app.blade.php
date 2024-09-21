<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

{{--CUSTOM FONTS CDN--}}
    <link href="https://fonts.google.com/specimen/Mulish?query=mulish">
    <link href="https://fonts.google.com/specimen/Montserrat?query=mont">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('css/style.css')}}">

{{--FONTAWESOME CDN--}}
    <script src="https://kit.fontawesome.com/7cba051bd4.js" crossorigin="anonymous"></script>

    @vite('resources/css/app.css')

    <title>KRIK | @yield('title', 'Default Title')</title>
</head>

<body class="bg-whiteBackground">
    {{--NEWSLETTER HEADER BAR--}}
    @include('layouts.newsletter_bar')
    {{--NAVBAR--}}
    @include('layouts.navbar')

    {{--MAIN CONTENT--}}
    <div class="">
        @yield('content')
    </div>

    {{--FOOTER--}}
    @include('layouts.footer')

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/singleProjectCarousel.js')}}"></script>

</body>

</html>
