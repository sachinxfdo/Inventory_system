<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="/home/favicon.ico">

    <title>{{ config('app.name', 'TeamTees') }}</title>

    <!-- Fonts -->
    {{--    <link rel="preconnect" href="https://fonts.bunny.net">--}}
    {{--    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />--}}

    <!-- Scripts -->


    @livewireStyles
    @livewireScripts
</head>

<body class="font-sans antialiased">
{{-- banner --}}
{{--@include('layouts.inc.banner')--}}
{{-- header --}}
{{--@include('layouts.inc.header')--}}

<!--   Hero Video   -->
@yield('content')
{{ isset($slot) ? $slot : '' }}

{{-- footer --}}
{{--@include('layouts.inc.footer')--}}


</body>

</html>
