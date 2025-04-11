@extends('layouts.app')

@section('title', 'INOVA')
@section('meta_description', 'INOVA')

@section('content')
    <div class="home-banner-container">
        <img class="home-banner" src="{{ asset('img/home/banner_home.png') }}" alt="Banner">
    </div>

    <div class="philosophy">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto mb-5 text-center">
                    <h3 class="mb-0">Building Bridges, Not Just Devices</h3>
                </div>
            </div>
            {{-- <a href="/about-us#purpose" class="text-white"> --}}
            <div class="row text-center gx-lg-5 bottom-padding">
                <div class="col-12 col-lg-4">
                    <img src="{{ asset('img/home/icon_accessible.svg') }}" alt="accessibility" class="values-icon">
                    <h3 class="pt-2">Accessibility</h3>
                    <p class="mb-0">We believe everyone deserves access to reliable technology. That’s why our products are built to welcome more people into a world of connection.</p>
                </div>
                <div class="col-12 col-lg-4">
                    <img src="{{ asset('img/home/icon_simplicity.svg') }}" alt="simplicity" class="values-icon">
                    <h3 class="pt-2">Simplicity</h3>
                    <p class="mb-0">We design technology that works for you, not against you. Our devices are clear, comfortable, and easy to use—built to simplify life, not overwhelm it.</p>
                </div>
                <div class="col-12 col-lg-4">
                    <img src="{{ asset('img/home/icon_community.svg') }}" alt="community" class="values-icon">
                    <h3 class="pt-2">Community</h3>
                    <p class="mb-0">INOVA products are designed to support more than individuals— we build tools that help people stay in touch, support each other, and grow together.</p>
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
                <h3 class="fw-bold">Designed for Real Life</h3>
                <div class="col-12 col-lg-4 text-center">
                    <img src="{{ asset('img/home/teen.jpg') }}" alt="" class="rounded-img home-user-img">
                    <h4 class="fw-bold theme-color mt-2">Built to Last for Young Users</h4>
                    <p>Northlight is affordable, easy to handle, and built to last. A replaceable battery and expandable storage mean it won’t be outgrown in a year. It’s a phone that grows with them, not against them.</p>
                </div>

                <div class="col-12 col-lg-4 text-center">
                    <img src="{{ asset('img/home/business.jpg') }}" alt="" class="rounded-img home-user-img">
                    <h4 class="fw-bold theme-color mt-2">Data-Secure for Business</h4>
                    <p>Keep sensitive data close with microSD storage that stays offline and in your control. While Dual SIM helps separate work and personal calls, and the replaceable battery ensures you're never caught off guard.</p>
                </div>

                <div class="col-12 col-lg-4 text-center">
                    <img src="{{ asset('img/home/senior.jpg') }}" alt="" class="rounded-img home-user-img">
                    <h4 class="fw-bold theme-color mt-2">Familiar & Easy for Seniors</h4>
                    <p>Northlight brings familiarity back. The replaceable battery and 3.5mm headphone jack feel intuitive and comfortable. Lightweight and easy to hold, with a clear interface—this is tech that supports, not frustrates.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="section-padding-sm pt-0">
            {{-- <div class="row bottom-padding-sm">
                <div class="col-12 col-md-8">
                    <h3 class="fw-bold">All in Our Products</h3>
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

            {{-- <div class="row top-padding">
                <div class="col-12 text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div> --}}

            {{-- <h3 class="fw-bold">Accessories</h3>

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

    <div class="container">
        <div class="row bottom-padding-sm gx-lg-5">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-3 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/phone/icons/icons_memory.svg') }}" alt="Chip" class="support-icon">
                    </div>
                    <div class="col-9 d-flex flex-column justify-content-center">
                        <h4 class="my-2 theme-color">Reliable Chip</h4>
                        <p class="mb-0">The MediaTek chip powers a responsive, efficient experience—ideal for calls, apps, and messaging—while helping conserve battery throughout the day.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-3 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/phone/icons/icons_battery_swap.svg') }}" alt="Battery" class="support-icon">
                    </div>
                    <div class="col-9 d-flex flex-column justify-content-center">
                        <h4 class="my-2 theme-color">Replaceable Battery</h4>
                        <p class="mb-0">Out late or on the move? Just swap in a spare—no outlets, no waiting. Northlight stays powered when you need it most.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gx-lg-5">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-3 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/phone/icons/icons_dualsim.svg') }}" alt="Dual SIM" class="support-icon">
                    </div>
                    <div class="col-9 d-flex flex-column justify-content-center">
                        <h4 class="my-2 theme-color">Dual SIM</h4>
                        <p class="mb-0">Keep work and personal life organized, or use a travel SIM with ease. Two numbers, one device—managed simply in settings.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-3 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('img/phone/icons/icons_sd_card.svg') }}" alt="microSD" class="support-icon">
                    </div>
                    <div class="col-9 d-flex flex-column justify-content-center">
                        <h4 class="my-2 theme-color">microSD Card</h4>
                        <p class="mb-0">Need more space? Slide in a microSD card and store your files right on your device—no cloud, no subscriptions, just peace of mind.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row section-padding">
            <div class="col-12">
                <h3 class="fw-bold">More Than a Phone</h3>
            </div>
            <div class="col-12">
                <p>At INOVA, every product we create—from the Northlight smartphone to future innovations—is more than just a device; it’s a bridge. A bridge between generations who share stories, ideas, and memories, making the world a little smaller and more connected. It’s a bridge between small businesses and their customers, empowering entrepreneurs with affordable, reliable technology that helps them grow. It’s a bridge between isolated communities and the wider world, breaking down the barriers of geography and circumstance with seamless communication.</p>
                <p class="mb-0">We don’t engineer gadgets for the sake of features or flashy specs. We design with purpose, with deep consideration for the needs of real people in the real world. Our tools are crafted to dissolve the barriers that separate us—whether it’s distance, technology access, or complexity—and simplify the way we connect with each other. At INova, the goal is simple: to empower people to focus on what truly matters: their relationships, their work, and their lives.</p>
            </div>
        </div>
    </div>
@endsection
