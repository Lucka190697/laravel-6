<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Argon Dashboard') }}</title>
    <!-- Favicon -->
    <link href="{{ asset('argon') }}/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/procriare-custom.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/themefy-icons/themify-icons.css') }}" rel="stylesheet">
</head>
<body class="{{ $class ?? '' }}">
<div id="app">
    {{--  <vue-snotify></vue-snotify>--}}
    @auth()
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @if(current_user()->farm_id)
            @include('layouts.navbars.sidebar')
        @endif
        @include('layouts.flash-messages')
    @endauth

    <div class="main-content">
        @include('layouts.navbars.navbar')
        @yield('content')
    </div>
</div>
<script>
    // $(function(){
    //     var nav = $('.card-procriare');
    //     $(window).scroll(function () {
    //         if ($(this).scrollTop() > 150) {
    //             nav.addClass("menu-fixo");
    //             $('body').css('padding-top', 70);
    //         } else {
    //             nav.removeClass("menu-fixo");
    //             $('body').css('padding-top', 0);
    //         }
    //     });
    // });
</script>
<script src="{{ mix('js/manifest.js') }}"></script>
<script src="{{ mix('js/vendor.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>

