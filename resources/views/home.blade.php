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
            padding: 50px 0;
        }

        .bg-card-1,
        .bg-card-2,
        .bg-card-3 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('img/home/teen.jpg') }}');
            background-size: cover;
            background-position: top center;
            height: 400px;
            border-radius: 25px;
            position: relative;
            overflow: hidden;
        }

        .bg-card-2 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('img/home/business.jpg') }}');
        }

        .bg-card-3 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('img/home/senior.jpg') }}');
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
                <div class="col-12 col-lg-8 mx-auto mb-5 text-center">
                    <div class="about-title">Building Bridges, Not Just Devices</div>
                </div>
            </div>
            {{-- <a href="/about-us#purpose" class="text-white"> --}}
            <div class="row text-center gx-lg-5 bottom-padding">
                <div class="col-12 col-lg-4">
                    <img src="{{ asset('img/home/icon_accessible.svg') }}" alt="accessibility" class="values-icon">
                    <div class="about-title pt-2 pb-3">Accessibility</div>
                    <p>We believe everyone deserves access to reliable technology. That’s why our products are built to welcome more people into a world of connection.</p>
                </div>
                <div class="col-12 col-lg-4">
                    <img src="{{ asset('img/home/icon_simplicity.svg') }}" alt="simplicity" class="values-icon">
                    <div class="about-title pt-2 pb-3">Simplicity</div>
                    <p>We design technology that works for you, not against you. Our devices are clear, comfortable, and easy to use—built to simplify life, not overwhelm it.</p>
                </div>
                <div class="col-12 col-lg-4">
                    <img src="{{ asset('img/home/icon_community.svg') }}" alt="community" class="values-icon">
                    <div class="about-title pt-2 pb-3">Community</div>
                    <p>INOVA products are designed to support more than individuals— we build tools that help people stay in touch, support each other, and grow together.</p>
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
                <div class="col-12 col-lg-8 mx-auto">
                    <p class="mb-0">We started INOVA with a simple belief: technology should be accessible and bring people closer. Every product we create begins with that in mind. We don’t design to impress—we design to include, support, and connect. Our work is about giving people tools that feel natural and genuinely serve a purpose. Whether it’s a first phone or a daily companion, INOVA devices are made to grow with you—reliable, durable, and always grounded in human connection.</p>
                </div>
            </div>

            <div class="row top-padding">
                <div class="title fw-bold">Building Bridges, Not Just Devices</div>
                {{-- <div class="col-6 col-lg-3 text-center">
                    <img src="{{ asset('img/home/talking-client_1098-13119.jpg') }}" alt="" class="rounded-img">
                    <div class="card-title theme-color">Smart & Practical</div>
                    <p>Honest value and reliable performance without extra cost—everything you need to stay connected with what truly matter, family, friends, and work.</p>
                </div> --}}

                <div class="col-12 col-lg-4">
                    <div class="bg-card-1 text-white text-center d-flex flex-column justify-content-end p-4">
                        <div class="card-title">Built to Grow</div>
                        <p>Durable and user-friendly, INOVA devices are designed with younger users in mind—simple to start with, strong enough to grow with confidence.</p>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="bg-card-2 text-white text-center d-flex flex-column justify-content-end p-4">
                        <div class="card-title">Built to Grow</div>
                        <p>Durable and user-friendly, INOVA devices are designed with younger users in mind—simple to start with, strong enough to grow with confidence.</p>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="bg-card-3 text-white text-center d-flex flex-column justify-content-end p-4">
                        <div class="card-title">Built to Grow</div>
                        <p>Durable and user-friendly, INOVA devices are designed with younger users in mind—simple to start with, strong enough to grow with confidence.</p>
                    </div>
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
                    <p>At INOVA, every product we create—from the Northlight smartphone to future innovations—is more than just a device; it’s a bridge. A bridge between generations who share stories, ideas, and memories, making the world a little smaller and more connected. It’s a bridge between small businesses and their customers, empowering entrepreneurs with affordable, reliable technology that helps them grow. It’s a bridge between isolated communities and the wider world, breaking down the barriers of geography and circumstance with seamless communication.</p>
                    <p>We don’t engineer gadgets for the sake of features or flashy specs. We design with purpose, with deep consideration for the needs of real people in the real world. Our tools are crafted to dissolve the barriers that separate us—whether it’s distance, technology access, or complexity—and simplify the way we connect with each other. At INova, the goal is simple: to empower people to focus on what truly matters: their relationships, their work, and their lives.</p>
                </div>
            </div>

            {{-- <div class="row top-padding">
                <div class="col-12 text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div> --}}

            {{-- <div class="title fw-bold accessories-title-padding">Accessories</div>

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
            </div> --}}
        </div>
    </div>
@endsection
