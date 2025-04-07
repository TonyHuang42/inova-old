@extends('layouts.app')

@section('title', 'INOVA')
@section('meta_description', 'INOVA')
@push('styles')
    <style>
        .row {
            --bs-gutter-y: 1.5rem;
        }

        .card-title {
            font-size: 18px;
            font-weight: 600;
            margin: 10px 0 0 10px;
        }

        .accessories-title-padding {
            padding: 50px 0 14px 0;
        }

        .home-slider-padding {
            padding-top: 36px;
        }

        /* .slick-prev {
            left: -15px;
        }

        .slick-next {
            right: -15px;
        } */

        @media (max-width: 767px) {
            .card-title {
                font-size: 20px;
            }

            .accessories-title-padding {
                padding: 50px 0 20px 0;
            }

            .home-slider-padding {
                padding-top: 30px;
            }
        }
    </style>
@endpush

@section('content')
    <div class="home-banner-container">
        <img class="home-banner" src="{{ asset('img/home/banner_home.png') }}" alt="Banner">
    </div>

    <div class="philosophy">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 mx-auto mb-5">
                    <p class="mb-0">At INOVA, we believe technology should simplify life—not complicate it. That’s why we build tools that keep you focused on what truly matters: real human connections.</p>
                </div>
            </div>
            {{-- <a href="/about-us#purpose" class="text-white"> --}}
                <div class="row text-center gx-md-5 bottom-padding">
                    <div class="col-12 col-lg-4">
                        <img src="{{ asset('img/about/icon_accessible.svg') }}" alt="accessibility" class="values-icon">
                        <div class="about-title pt-2 pb-3">Accessibility</div>
                        <p>We ensure technology is accessible to everyone, with inclusive pricing and features designed for all ages, abilities, and budgets—because innovation should never leave people behind.</p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <img src="{{ asset('img/about/icon_simplicity.svg') }}" alt="simplicity" class="values-icon">
                        <div class="about-title pt-2 pb-3">Simplicity</div>
                        <p>We design technology that works for you, not against you. Our intuitive interfaces and purposeful features strip away complexity, helping you navigate daily life with ease—no manuals required.</p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <img src="{{ asset('img/about/icon_community.svg') }}" alt="community" class="values-icon">
                        <div class="about-title pt-2 pb-3">Community</div>
                        <p>We’re more than a tech company—we’re community partners. Our designs empower neighborhoods, families, and friends to connect, collaborate, and thrive together.</p>
                    </div>
                </div>
            {{-- </a>
            <div class="row bottom-padding pt-5">
                <div class="col-12 text-center">
                    <a class="learn-more-button" href="/about-us">Learn More</a>
                </div>
            </div> --}}
        </div>
    </div>

    <div class="container">
        <div class="section-padding">
            <div class="row">
                <div class="col-12 col-md-8 mx-auto">
                    <p>At INova, we believe technology should feel natural—not complicated. That’s why we create smart, reliable phones designed to support your everyday rhythm without the noise. From the first tap, our devices are intuitive, comfortable, and ready to fit seamlessly into your life. No unnecessary features, no steep learning curves—just the essentials done right.</p>
                    <p class="mb-0">We focus on what truly matters: clarity, simplicity, and connection. Whether you're getting your first phone or looking for a dependable daily driver, INova is built to grow with you. Our mission isn’t to follow trends—it’s to make technology more human, more accessible, and more meaningful for everyone.</p>
                </div>
            </div>

            <div class="row top-padding">
                <div class="title fw-bold">Building Bridges, Not Just Devices</div>
                <div class="col-6 col-lg-3 text-center">
                    <img src="{{ asset('img/home/talking-client_1098-13119.jpg') }}" alt="" class="rounded-img">
                    <div class="card-title text-color">Smart & Practical</div>
                    <p>This phone connects you to what matters most—family, friends, and work. It blends simplicity and smart functionality for a seamless, everyday experience.</p>
                </div>

                <div class="col-6 col-lg-3 text-center">
                    <img src="{{ asset('img/home/woman-sitting-sunlight-front-door-using-cellphone-wearing-headphones_23-2148204609.jpg') }}" alt="" class="rounded-img">
                    <div class="card-title text-color">Built to Grow</div>
                    <p>Focused on what you need, this phone offers a clean interface and optimized system, making your day easier without unnecessary features or clutter.</p>
                </div>

                <div class="col-6 col-lg-3 text-center">
                    <img src="{{ asset('img/home/portrait-happy-businessman-talking-cellphone_23-2147899708.jpg') }}" alt="" class="rounded-img">
                    <div class="card-title text-color">Work-Ready</div>
                    <p>Durable and user-friendly, this phone adapts with software updates and expandable options, staying reliable as your needs evolve.</p>
                </div>

                <div class="col-6 col-lg-3 text-center">
                    <img src="{{ asset('img/home/medium-shot-old-woman-library_23-2150494666.jpg') }}" alt="" class="rounded-img">
                    <div class="card-title text-color">Simple & Clear</div>
                    <p>Designed for productivity, it offers essential tools for communication and scheduling. Easy to navigate and comfortable to hold, it just works—beautifully.</p>
                </div>
            </div>


        </div>
    </div>

    <div class="container">
        <div class="section-padding-sm pt-0">
            {{-- <div class="row bottom-padding-sm">
                <div class="col-12 col-md-8">
                    <div class="title fw-bold">All in Our Products</div>
                </div>
                <div class="col-12 col-md-4 d-flex align-items-end justify-content-end">
                    <a href="/northlight" class="underline-link">
                        Experience it now <i class="fa-solid fa-angle-right"></i>
                    </a>
                </div>
            </div> --}}

            <a href="/northlight">
                <img src="{{ asset('img/home/banner_northlight.png') }}" alt="Banner" class="rounded-img">
            </a>

            <div class="row top-padding">
                <div class="col-12">
                    <div class="title fw-bold">More Than a Phone</div>
                </div>
                <div class="col-12">
                    <p>At INova, every product we create—from the Northlight smartphone to future innovations—is more than just a device; it’s a bridge. A bridge between generations who share stories, ideas, and memories, making the world a little smaller and more connected. It’s a bridge between small businesses and their customers, empowering entrepreneurs with affordable, reliable technology that helps them grow. It’s a bridge between isolated communities and the wider world, breaking down the barriers of geography and circumstance with seamless communication.</p>
                    <p>We don’t engineer gadgets for the sake of features or flashy specs. We design with purpose, with deep consideration for the needs of real people in the real world. Our tools are crafted to dissolve the barriers that separate us—whether it’s distance, technology access, or complexity—and simplify the way we connect with each other. At INova, the goal is simple: to empower people to focus on what truly matters: their relationships, their work, and their lives.</p>
                </div>
            </div>

            {{-- <div class="row top-padding">
                <div class="col-12 text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div> --}}

            <div class="title fw-bold accessories-title-padding">Accessories</div>

            <div class="slider home-slider-padding">
                <a href="/accessories">
                    <img src="{{ asset('img/accessories/battery.jpg') }}" alt="battery" class="rounded-img">
                    <div class="card-title">Battery</div>
                </a>

                <a href="/accessories">
                    <img src="{{ asset('img/accessories/battery_charger.jpg') }}" alt="battery_charger" class="rounded-img">
                    <div class="card-title">Battery Charger</div>
                </a>

                <a href="/accessories">
                    <img src="{{ asset('img/accessories/phone_case.jpg') }}" alt="phone_case" class="rounded-img">
                    <div class="card-title">Phone Case</div>
                </a>

                <a href="/accessories">
                    <img src="{{ asset('img/accessories/microSD_card.jpg') }}" alt="microSD_card" class="rounded-img">
                    <div class="card-title">microSD Card</div>
                </a>

                <a href="/accessories">
                    <img src="{{ asset('img/accessories/power_adapter.jpg') }}" alt="power_adapter" class="rounded-img">
                    <div class="card-title">Power Adapter</div>
                </a>

                <a href="/accessories">
                    <img src="{{ asset('img/accessories/USB-C_cable.jpg') }}" alt="usb_cable" class="rounded-img">
                    <div class="card-title">USB-C Cable</div>
                </a>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.slider').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                dots: true,
                arrows: true,
                prevArrow: '<button type="button" class="slick-prev"><img src="{{ asset('img/phone/icons/icons_slider.svg') }}" alt="Previous"></button>',
                nextArrow: '<button type="button" class="slick-next"><img src="{{ asset('img/phone/icons/icons_slider.svg') }}" alt="Next"></button>',
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 2
                        }
                    }
                ]
            });
        });
    </script>
@endpush
