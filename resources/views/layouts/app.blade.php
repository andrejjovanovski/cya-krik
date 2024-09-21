<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.google.com/specimen/Mulish?query=mulish">
    <link href="https://fonts.google.com/specimen/Montserrat?query=mont">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('/public/css/style.css') }}">

    <title>@yield('title', 'Default Title')</title>
</head>

<body>
    {{--NEWSLETTER HEADER BAR--}}
    @include('layouts.newsletter_bar')
    {{--NAVBAR--}}
    @include('layouts.navbar')

    {{--MAIN CONTENT--}}
    <div class="h-[140px]"></div>
    <div class="container mx-auto">
        @yield('content')
    </div>

    {{--FOOTER--}}
    @include('layouts.footer')

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
