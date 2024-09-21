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
    <title>@yield('title', 'Default Title')</title>
</head>
<body>
{{--NEWSLETTER HEADER BAR--}}

{{--NAVBAR--}}

{{--MAIN CONTENT--}}
<div class="container-sm ">
    @yield('content')
</div>

{{--FOOTER--}}
@include('layouts.footer')
</body>
</html>
