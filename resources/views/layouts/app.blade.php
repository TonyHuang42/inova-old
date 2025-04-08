<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'INOVA')</title>
    <meta name="description" content="@yield('meta_description', 'INOVA')">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/logo/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/logo/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/logo/favicon/favicon-16X16.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('img/logo/favicon/android-chrome-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('img/logo/favicon/android-chrome-512x512.png') }}">
    {{-- <link rel="manifest" href="{{ asset('img/logo/favicon/site.webmanifest') }}"> --}}
    @stack('styles')
    <style>
        .navbar {
            --bs-navbar-padding-y: 0;
        }

        .horizontal-line {
            border-top: 1px solid #565656;
            width: 100%;
        }

        /* #scrollToTopBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            background-color: white;
            color: black;
            padding: 10px 18px;
            border: 1px solid #232323;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            z-: 1000;
        }

        #scrollToTopBtn:hover {
            color: white;
            background-color: #232323;
            border: 1px solid white;
        } */
    </style>
</head>

<body style="overflow-x: hidden">
    <div class="container desktop-nav d-md-block d-none">
        <nav class="nav">
            <a class="logo-container d-flex align-items-center" href="/">
                {{-- <img src="{{ asset('img/logo/inova_logo_black.svg') }}" alt="logo" class="logo"> --}}
                <img src="{{ asset('img/logo/iNova_workmark.svg') }}" alt="logo" class="inova">
            </a>

            <div class="nav-links">
                <a href="/" class="first-nav underline-link">HOME</a>
                <a href="/northlight" class="first-nav underline-link">PHONE</a>
                <a href="/accessories" class="first-nav underline-link">ACCESSORIES</a>
                <a href="/support" class="first-nav underline-link">SUPPORT</a>
                <a href="/about-us" class="first-nav underline-link">ABOUT</a>
            </div>
        </nav>
    </div>

    <div class="mobile-nav d-md-none d-block">
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container-fluid">
                <a class="logo-container" href="/">
                    {{-- <img src="{{ asset('img/logo/inova_logo_black.svg') }}" alt="logo" class="logo"> --}}
                    <img src="{{ asset('img/logo/iNova_workmark.svg') }}" alt="logo" class="inova">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="northlight">PHONE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/accessories">ACCESSORIES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/support">SUPPORT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about-us">ABOUT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Dynamic content from the page that extends this layout -->
    @yield('content')

    <div class="mt-auto" style="background-color: #232323;">
        <div class="container">
            {{-- <nav class="nav" style="height: 80px;">
                <a class="logo-container" href="/">
                    <img src="{{ asset('img/logo/inova_logo_silver.svg') }}" alt="logo" class="logo">
                </a>
                <div class="nav-links nav-links-white">
                    <a href="/" class="first-nav underline-link">HOME</a>
                    <a href="/northlight" class="first-nav underline-link">PHONE</a>
                    <!-- <a href="/accessories" class="first-nav underline-link">ACCESSORIES</a> -->
                    <a href="/support" class="first-nav underline-link">SUPPORT</a>
                    <a href="/about-us" class="first-nav underline-link">ABOUT</a>
                </div>
            </nav> --}}
            <div class="horizontal-line"></div>
            <div class="copyright">
                <p class="m-0">Copyright © <strong>INOVA DIGITAL SOLUTIONS INC.</strong> All Rights Reserved</p>
                <div class="terms">
                    <a href="/terms-of-use">Terms of Use</a>
                    <a href="/privacy-policy">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    @stack('scripts')
</body>

</html>
