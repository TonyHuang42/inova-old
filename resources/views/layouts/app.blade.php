<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'KINGSMAN')</title>
    <meta name="description" content="@yield('meta_description', 'KINGSMAN')">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('font/stylesheet.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/Generic/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/Generic/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/Generic/favicon/favicon-16X16.png') }}">
    <link rel="manifest" href="{{ asset('img/Generic/favicon/site.webmanifest') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    @stack('styles')
    <style>
        #back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            background-color: #aa182c;
            color: white;
            border: none;
            padding: 14px 20px;
            border-radius: 26px;
            cursor: pointer;
            z-index: 1000;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg shadow-sm">
            <div class="container d-flex justify-content-between align-items-center">
                <!-- Logo -->
                <a class="navbar-brand me-0 d-xl-block d-lg-none" href="/">
                    <img src="{{ asset('img/Generic/KEG_logo.svg') }}" alt="logo" class="logo">
                </a>
                <a class="navbar-brand me-0 d-none d-lg-block d-xl-none" href="/">
                    <img src="{{ asset('img/Generic/KEG_emblem.svg') }}" alt="logo" class="logo">
                </a>
                <!-- Toggle Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navbar Content -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav d-flex justify-content-evenly w-100">
                        <li class="nav-item"><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link {{ Request::is('about-us') ? 'active' : '' }}" href="/about-us">About Us</a></li>
                        <li class="nav-item"><a class="nav-link {{ Request::is('academics') ? 'active' : '' }}" href="/academics">Academics</a></li>
                        <li class="nav-item"><a class="nav-link {{ Request::is('news') ? 'active' : '' }}" href="/news">News</a></li>
                        <li class="nav-item"><a class="nav-link {{ Request::is('franchise') ? 'active' : '' }}" href="/franchise">Franchise</a></li>
                        <li class="nav-item"><a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact</a></li>
                    </ul>
                    <a href="/locations" class="button find-a-center">
                        <span class="button-text">Find a Center</span>
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Dynamic content from the page that extends this layout -->
    @yield('content')

    <section class="footer">
        <div class="container mt-lg-0 mt-4">
            <div class="row section-padding bottom-padding-sm">
                <div class="col-xxl-6 col-xl-7 col-lg-6 mt-0">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('img/Generic/KEG_logo_white.svg') }}" alt="logo" class="logo">
                    </a>
                    <p class="mt-4 mb-0">Helping families raise amazing children is what we do. Call today for a tour and you'll quickly see why families across Canada trust us as their preschool of choice.</p>
                    <div class="social-icons mt-3">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-x-twitter"></i>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-6 offset-xxl-2 offset-xl-1">
                    <h3 class="mb-3">Contact</h3>
                    <p><a href="mailto:@example.com">@example.com</a></p>
                    <p><a href="tel:+17782977108">+1 (778) 297-7108</a></p>
                    <p class="mb-0">200 - 3071 No.5 Rd,<br>Richmond, BC, V6X 2T4</p>
                </div>
                <div class="col-xl-2 col-lg-3 col-6">
                    <h3 class="mb-3">Quick Info</h3>
                    <p><a href="{{ url('/academics') }}">Academics</a></p>
                    <p><a href="{{ url('/franchise') }}">Franchise</a></p>
                </div>
            </div>

            <hr class="m-0">

            <div class="row section-padding-sm">
                <div class="col-lg-6">
                    <p class="mb-0">&copy; <?php echo Date('Y'); ?> Kingsman Education Group. All rights reserved.</p>
                </div>
                <div class="col-lg-6 d-flex flex-wrap justify-content-lg-end justify-content-start gap-4 mt-lg-0 mt-4">
                    <div class="d-flex gap-4 flex-column flex-sm-row">
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Use</a>
                    </div>
                    <div class="d-flex gap-4 flex-column flex-sm-row">
                        <a href="#">Accessibility</a>
                        <a href="#">License</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Go Back to Top Button -->
    <button id="back-to-top"><i class="fa-solid fa-arrow-up"></i></button>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @stack('scripts')
    <script>
        // Show the button when the user scrolls down 20px from the top of the document
        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("back-to-top").style.display = "block";
            } else {
                document.getElementById("back-to-top").style.display = "none";
            }
        }

        document.getElementById('back-to-top').addEventListener('click', function() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
