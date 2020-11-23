<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#4b9bc6" />
    <meta name="description" content="Sutike Funeral Care - You deserve our goods"/>
    <meta property="og:image" content="/assets/images/logo/brand_new_logo.png" />
    <meta property="og:site_name" content="Sutike Funeral Care" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Homepage - SUTIKE" />
    <meta property="og:url" content="sutike.id" />
    <meta property="og:description" content="Sutike Funeral Care" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- <link 
        rel="stylesheet" 
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
        crossorigin="anonymous"
    > --}}

    <link 
        href="maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" 
        rel="stylesheet" 
        id="bootstrap-css"
    >

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top" id="navbar">
            <div class="container">
                <li class="navbar-brand">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('assets/images/logo/brand_new_logo.png') }}" alt="LOGO" style="width:5%;">
                    </a>
                    <img src="{{ asset('assets/images/logo/brand.png') }}" alt="LOGO" style="width:250px;">
                </li>
                <button 
                    class="navbar-toggler" 
                    type="button" 
                    data-toggle="collapse" 
                    data-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" 
                    aria-expanded="false" 
                    aria-label="{{ __('Toggle navigation') }}"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li><a href="{{ url('/services') }}" class="nav-link {{ (request()->segment(1) == 'services') ? 'active' : '' }}">{{ __('SERVICES') }}</a></li>
                        <li><a href="{{ url('/cargo') }}" class="nav-link {{ (request()->segment(1) == 'cargo') ? 'active' : '' }}">{{ __('CARGO') }}</a></li>
                        <li><a href="https://cdn.sutike.id/SUTIKE_CATALOGUE.pdf" class="nav-link" target="_blank">{{ __('CATALOGUE') }}</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('header')

        <main style="padding-top: 50px;">
            @yield('content')
        </main>

        @include('layouts.footer')

    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script>
        $(document).ready(function() {
            var NavTop = $('#navbar').offset().top;
            var Nav = function() {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > NavTop) {
                    $('#navbar').addClass('fixed-top');
                } else {
                    $('#navbar').removeClass('fixed-top');
                }
            };

            Nav();

            $(window).scroll(function() {
                Nav();
            });
        });
    </script> --}}

    @yield('js')

</body>
</html>