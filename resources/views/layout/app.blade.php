<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cleaning Service - @yield('title')</title>

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Cleaning Service" />
    <meta property="og:description " content="Cleaning Service" />
    <meta property="og:url" content="https://everjobsolutions.com" />
    <meta property="og:site_name" content="Cleaning Service" />
    <meta property="og:image:alt" content="Cleaning Service" />
    <meta name="author" content="Cleaning Service">

    <meta name="keywords"
        content="cleaning service, residential cleaning, commercial cleaning, office cleaning, house cleaning, deep cleaning, move-in/move-out cleaning, carpet cleaning, window cleaning, janitorial services, maid service, cleaning company, cleaning professionals, professional cleaners, eco-friendly cleaning, sanitization, disinfecting services, floor cleaning, upholstery cleaning, cleaning solutions, local cleaning services, cleaning contractors, cleaning experts, reliable cleaning, affordable cleaning, cleaning service near me, top cleaning service, cleaning service reviews, cleaning service quotes, customized cleaning, cleaning service provider, cleaning and maintenance, regular cleaning, one-time cleaning, spring cleaning, cleaning services for businesses, cleaning services for homes, cleaning service specialists, professional housekeepers">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/backToTop.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> --}}
</head>

<body>
    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    @include('layout.menu')

    <main>
        @include('components.alert')
        @yield('content')


        <div id="cookie-consent-banner">
            <p style="color: white">
                We use cookies to ensure you get the best experience on our website.
            </p>
            <button id="accept-cookies">Allow All Cookies</button>
            <button id="reject-cookies">Reject</button>
        </div>
    </main>

    @include('layout.footer')

    <script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/js/backToTop.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    {{-- <script src="{{ asset('frontend/js/script.js?v=1') }}"></script> --}}
    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>

    <script src="{{ asset('assets/js/cookie.js') }}"></script>

    @yield('script')

</body>

</html>
