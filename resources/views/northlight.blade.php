@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/custom-container.css') }}">
    <style>
        #phone-nav-container {
            background-color: #232323;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 999;
            visibility: hidden;
            transition: transform 0.4s ease-in-out, visibility 0.4s ease-in-out;
        }

        #phone-nav-container.hidden {
            transform: translateY(-100%);
            visibility: hidden;
        }

        #phone-nav-container.visible {
            transform: translateY(0);
            visibility: visible;
        }

        .card {
            --bs-card-border-width: 0;
            --bs-card-border-color: none;
            --bs-body-bg: #eee;
        }
    </style>
@endpush

@section('content')
    @include('inc.phone-nav')
    {{-- <div class="northlight-banner-container">
        <img src="{{ asset('img/phone/banner_northlight.jpg') }}" alt="banner" class="phone-banner">
    </div> --}}
    <div class="northlight-banner-container">
        <img src="{{ asset('img/phone/banner/BG.jpg') }}" alt="banner" class="phone-banner">
        <img src="{{ asset('img/phone/banner/phone.png') }}" alt="phone" class="phone-banner-phone">
        <img src="{{ asset('img/phone/banner/northlight.png') }}" alt="northlight" class="phone-banner-northlight">
        <img src="{{ asset('img/phone/banner/slogan.png') }}" alt="slogan" class="phone-banner-slogan">

        <div class="d-none d-xl-flex">
            <a class="highlight-wrap" data-target="camera" href="/northlight#engineering-drawing-section">
                <img src="{{ asset('img/phone/banner/desktop_bubbles/bubble_camera.png') }}" alt="features" class="phone-banner-features" style="top: 42%; left: 19%;">
            </a>

            <a class="highlight-wrap" data-target="display" href="/northlight#engineering-drawing-section">
                <img src="{{ asset('img/phone/banner/desktop_bubbles/bubble_screen.png') }}" alt="features" class="phone-banner-features" style="top: 42%; left: 77%;">
            </a>

            <a class="highlight-wrap" data-target="battery" href="/northlight#engineering-drawing-section">
                <img src="{{ asset('img/phone/banner/desktop_bubbles/bubble_battery.png') }}" alt="features" class="phone-banner-features" style="top: 64%; left: 15%;">
            </a>

            <a class="highlight-wrap" data-target="sim-card" href="/northlight#engineering-drawing-section">
                <img src="{{ asset('img/phone/banner/desktop_bubbles/bubble_SIMs.png') }}" alt="features" class="phone-banner-features" style="top: 64%; left: 85%;">
            </a>

            <a class="highlight-wrap" data-target="chip" href="/northlight#engineering-drawing-section">
                <img src="{{ asset('img/phone/banner/desktop_bubbles/bubble_chip.png') }}" alt="features" class="phone-banner-features" style="top: 86%; left: 20%;">
            </a>

            <a class="highlight-wrap" data-target="microSD" href="/northlight#engineering-drawing-section">
                <img src="{{ asset('img/phone/banner/desktop_bubbles/bubble_SDCard.png') }}" alt="features" class="phone-banner-features" style="top: 86%; left: 82%;">
            </a>
        </div>

        <div class="d-xl-none d-md-flex d-none">
            <a class="highlight-wrap" data-target="camera-mobile" href="/northlight#engineering-drawing-section-mobile">
                <img src="{{ asset('img/phone/banner/desktop_bubbles/bubble_camera.png') }}" alt="features" class="phone-banner-features" style="top: 42%; left: 19%;">
            </a>

            <a class="highlight-wrap" data-target="display-mobile" href="/northlight#engineering-drawing-section-mobile">
                <img src="{{ asset('img/phone/banner/desktop_bubbles/bubble_screen.png') }}" alt="features" class="phone-banner-features" style="top: 42%; left: 77%;">
            </a>

            <a class="highlight-wrap" data-target="battery-mobile" href="/northlight#engineering-drawing-section-mobile">
                <img src="{{ asset('img/phone/banner/desktop_bubbles/bubble_battery.png') }}" alt="features" class="phone-banner-features" style="top: 64%; left: 15%;">
            </a>

            <a class="highlight-wrap" data-target="sim-card-mobile" href="/northlight#engineering-drawing-section-mobile">
                <img src="{{ asset('img/phone/banner/desktop_bubbles/bubble_SIMs.png') }}" alt="features" class="phone-banner-features" style="top: 64%; left: 85%;">
            </a>

            <a class="highlight-wrap" data-target="chip-mobile" href="/northlight#engineering-drawing-section-mobile">
                <img src="{{ asset('img/phone/banner/desktop_bubbles/bubble_chip.png') }}" alt="features" class="phone-banner-features" style="top: 86%; left: 20%;">
            </a>

            <a class="highlight-wrap" data-target="microSD-mobile" href="/northlight#engineering-drawing-section-mobile">
                <img src="{{ asset('img/phone/banner/desktop_bubbles/bubble_SDCard.png') }}" alt="features" class="phone-banner-features" style="top: 86%; left: 82%;">
            </a>
        </div>

        <div class="d-md-none">
            <a class="highlight-wrap" data-target="camera-mobile" href="/northlight#engineering-drawing-section-mobile">
                <img src="{{ asset('img/phone/banner/mobile_bubbles/bubble_camera.png') }}" alt="features" class="phone-banner-features" style="top: 27%; left: 25%;">
            </a>

            <a class="highlight-wrap" data-target="display-mobile" href="/northlight#engineering-drawing-section-mobile">
                <img src="{{ asset('img/phone/banner/mobile_bubbles/bubble_screen.png') }}" alt="features" class="phone-banner-features" style="top: 27%; left: 50%;">
            </a>

            <a class="highlight-wrap" data-target="battery-mobile" href="/northlight#engineering-drawing-section-mobile">
                <img src="{{ asset('img/phone/banner/mobile_bubbles/bubble_battery.png') }}" alt="features" class="phone-banner-features" style="top: 27%; left: 75%;">
            </a>

            <a class="highlight-wrap" data-target="sim-card-mobile" href="/northlight#engineering-drawing-section-mobile">
                <img src="{{ asset('img/phone/banner/mobile_bubbles/bubble_SIMs.png') }}" alt="features" class="phone-banner-features" style="top: 37%; left: 25%;">
            </a>

            <a class="highlight-wrap" data-target="chip-mobile" href="/northlight#engineering-drawing-section-mobile">
                <img src="{{ asset('img/phone/banner/mobile_bubbles/bubble_chip.png') }}" alt="features" class="phone-banner-features" style="top: 37%; left: 50%;">
            </a>

            <a class="highlight-wrap" data-target="microSD-mobile" href="/northlight#engineering-drawing-section-mobile">
                <img src="{{ asset('img/phone/banner/mobile_bubbles/bubble_SDCard.png') }}" alt="features" class="phone-banner-features" style="top: 37%; left: 75%;">
            </a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="row section-padding">
                    <div class="col-12">
                        <div class="col-12">
                            <h1 class="fw-bold text-center">More Than a Phone</h1>
                        </div>
                        <div class="col-12">
                            <p class="mb-0">Northlight is designed to be practical, dependable, and easy to live with. It brings together the essentials—performance, storage, flexibility, and power—in a way that makes sense for everyday use. From the processor to the battery, every part is thoughtfully chosen to help you stay connected, productive, and in control—whether at home, at work, or on the move. Built for simplicity, shaped by purpose, and ready to meet the demands of real life. No clutter, no distractions—just the features you need, when you need them.</p>
                        </div>
                    </div>
                </div>
                <div class="row bottom-padding-sm gx-md-5">
                    <div class="col-md-6 d-flex justify-content-center align-items-center" style="background-color: #0b212c; border-radius: 15px;">
                        <img src="{{ asset('img/phone/Inova_spec_parts_chip.png') }}" alt="chip" class="img-fluid" style="max-height: 300px;">
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div>
                            <img src="{{ asset('img/phone/icons/icons_memory.svg') }}" alt="Chip" class="support-icon">
                            <h3 class="my-2 theme-color">Reliable Chip</h3>
                            <p class="key-features-description">Northlight runs on the <strong>MediaTek Helio A22</strong>, a <strong>2.0GHz quad-core processor</strong> built on efficient <strong>12nm</strong> architecture for smooth and consistent performance. Whether messaging, streaming, or multitasking, it delivers dependable speed without overheating or battery drain. Manufactured by <strong>TSMC</strong>, the world’s leading chipmaker, it ensures <strong>stability, security</strong>, and everyday <strong>efficiency</strong>.</p>
                        </div>
                    </div>
                </div>

                <div class="row bottom-padding-sm">
                    <div class="col-xl-5 col-md-6 d-flex align-items-center order-2 order-md-1">
                        <div>
                            <img src="{{ asset('img/phone/icons/icons_battery_swap.svg') }}" alt="Battery" class="support-icon">
                            <h3 class="my-2 theme-color">Replaceable Battery</h3>
                            <p class="key-features-description">Northlight features a <strong>2500mAh removable battery</strong> with a <strong>tool-free</strong> latch system, allowing fast swaps without a technician. Keep a spare charged and stay powered anytime, and when battery performance declines over time, just <strong>replace the unit</strong>—not the phone. This design supports long-term <strong>durability, reduces waste</strong>, and ensures you're always ready when charging isn’t possible.</p>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-2 col-md-6 d-flex align-items-center order-1 order-md-2">
                        <img src="{{ asset('img/phone/Inova_spec_parts_battery.png') }}" alt="battery" class="img-fluid">
                    </div>
                </div>

                <div class="row bottom-padding-sm">
                    <div class="col-xl-5 col-md-6 d-flex align-items-center">
                        <img src="{{ asset('img/phone/Inova_spec_parts_dualSIM.png') }}" alt="dual SIM cards" class="img-fluid">
                    </div>
                    <div class="col-xl-5 offset-xl-2 col-md-6 d-flex align-items-center">
                        <div>
                            <img src="{{ asset('img/phone/icons/icons_dualsim.svg') }}" alt="Dual SIM" class="support-icon">
                            <h3 class="my-2 theme-color">Dual SIM</h3>
                            <p class="key-features-description">Northlight supports <strong>dual SIM</strong> functionality with dedicated <strong>Micro and Nano SIM slots</strong>, and unlike many alternatives, Northlight allows you to use a <strong>microSD card simultaneously</strong>—no trade-offs between storage and connectivity. Two numbers can stay active at once, with seamless switching in settings. It’s a reliable solution for <strong>managing lines, cutting costs</strong>, and keeping things simple.</p>
                        </div>
                    </div>
                </div>

                <div class="row bottom-padding">
                    <div class="col-xl-5 col-md-6 d-flex align-items-center order-2 order-md-1">
                        <div>
                            <img src="{{ asset('img/phone/icons/icons_sd_card.svg') }}" alt="microSD" class="support-icon">
                            <h3 class="my-2 theme-color">microSD Card</h3>
                            <p class="key-features-description">With support for <strong>microSD cards up to 512GB</strong>, Northlight allows easy, cost-effective storage expansion. Keep photos, apps, and files <strong>securely stored</strong> on your device, with no need for cloud logins or subscriptions. Your data stays <strong>physically</strong> with you, offering greater <strong>privacy, control, and offline access</strong>—all through a simple plug-and-play setup that requires no configuration.</p>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-2 col-md-6 d-flex align-items-center order-1 order-md-2">
                        <img src="{{ asset('img/phone/Inova_spec_parts_microSD.png') }}" alt="microSD" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container">
        <h1 class="text-center top-padding">Innovation that Brings People Together</h1>
        <div class="row top-padding bottom-padding-sm gx-lg-5 gy-lg-0 gy-4">
            <div class="col-lg-6 d-flex align-items-center">
                <img src="{{ asset('img/phone/phone_photo_1.jpg') }}" alt="" class="rounded-img">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h3 class="pb-3">Designed to Connect, Not Compete</h3>
                <p>Northlight isn’t just a smartphone—it’s INOVA’s commitment to accessibility, simplicity, and community in action. Designed to dissolve barriers between people and technology, it strips away complexity, cost, and excess. Every feature serves a purpose: connecting you to what matters, not chasing specs you’ll never use.</p>
                <p>Behind every detail lies a choice: prioritize people over pixels, purpose over prestige.</p>
            </div>
        </div>

        <div class="row bottom-padding gx-lg-5 gy-lg-0 gy-4">
            <div class="col-lg-6 d-flex flex-column justify-content-center order-1 order-lg-0">
                <h3 class="pb-3">Building Bridges, Not Gadgets</h3>
                <p>INOVA’s vision has always been about connection—not just between devices, but between people. Northlight is a tool for the teenager navigating their first phone, the retiree video-calling grandkids, or the entrepreneur juggling work and life. It’s a reminder that innovation isn’t about pixels or megawatts—it’s about dissolving barriers.</p>
                <p>Because at INOVA, we don’t engineer phones. We craft tools that let you focus on what truly matters: the people on the other side of the screen.</p>
            </div>
            <div class="col-lg-6 d-flex align-items-center order-0 order-lg-1">
                <img src="{{ asset('img/phone/phone_photo_2.jpg') }}" alt="" class="rounded-img">
            </div>
        </div>
    </div> --}}

    <!-- Desktop Engineering Drawing -->
    <div class="bg-color overflow-hidden">
        <div class="custom-container">
            <h1 class="text-white text-center" style="padding-top: 50px;">Beyond the Essentials</h1>
            <div class="features-container-desktop" id="engineering-drawing-section">
                <div class="image-wrapper engineering-drawing-position engineering-drawing-lg">
                    <img src="{{ asset('img/phone/Northlight-explosive-sketch.png') }}" alt="engineering drawing" class="engineering-drawing">
                    <svg class="circle-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                        {{-- <circle class="circle" cx="36" cy="38.2">
                            <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="sim-card" cx="36" cy="38.2" r="1" /> --}}

                        <circle class="circle" cx="27.5" cy="65">
                            <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="usb-c" cx="27.5" cy="65" r="1" />

                        {{-- <circle class="circle" cx="56" cy="27">
                            <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="battery" cx="56" cy="27" r="1" /> --}}

                        {{-- <circle class="circle" cx="39.5" cy="34.5">
                            <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="microSD" cx="39.5" cy="34.5" r="1" /> --}}

                        <circle class="circle" cx="52" cy="13.5">
                            <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="case" cx="52" cy="13.5" r="1" />

                        <circle class="circle" cx="51.5" cy="86.5">
                            <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="display" cx="51.5" cy="86.5" r="1" />

                        <circle class="circle" cx="29.5" cy="61.5">
                            <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="3.5mm" cx="29.5" cy="61.5" r="1" />

                        {{-- <circle class="circle" cx="37.8" cy="64">
                            <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="chip" cx="37.8" cy="64" r="1" /> --}}

                        <circle class="circle" cx="33.3" cy="46.5">
                            <animate attributeName="r" from="1" to="2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="camera" cx="33.3" cy="46.5" r="1" />
                    </svg>
                </div>

                <!-- Small Desktop Engineering Drawing -->
                <div class="image-wrapper engineering-drawing-position engineering-drawing-md">
                    <img src="{{ asset('img/phone/Northlight-explosive-sketch-mobile.png') }}" alt="engineering drawing" class="engineering-drawing">
                    <svg class="circle-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.64 100">
                        {{-- <circle class="circle" cx="14.2" cy="35.8">
                            <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="sim-card" cx="14.2" cy="35.8" r="1.1" /> --}}

                        <circle class="circle" cx="4.5" cy="67">
                            <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="usb-c" cx="4.5" cy="67" r="1.1" />

                        {{-- <circle class="circle" cx="36.5" cy="23.5">
                            <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="battery" cx="36.5" cy="23.5" r="1.1" /> --}}

                        {{-- <circle class="circle" cx="18.2" cy="31.5">
                            <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="microSD" cx="18.2" cy="31.5" r="1.1" /> --}}

                        <circle class="circle" cx="32.5" cy="7.5">
                            <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="case" cx="32.5" cy="7.5" r="1.1" />

                        <circle class="circle" cx="32" cy="91">
                            <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="display" cx="32" cy="91" r="1.1" />

                        <circle class="circle" cx="7.5" cy="61.5">
                            <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="3.5mm" cx="7.5" cy="61.5" r="1.1" />

                        {{-- <circle class="circle" cx="16" cy="65">
                            <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="chip" cx="16" cy="65" r="1.1" /> --}}

                        <circle class="circle" cx="11" cy="45">
                            <animate attributeName="r" from="1.1" to="2.2" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="camera" cx="11" cy="45" r="1.1" />
                    </svg>
                </div>

                <!-- Case -->
                <div class="image-wrapper content" id="case">
                    <img src="{{ asset('img/phone/phone_case.png') }}" alt="case" class="engineering-drawing">
                    <div class="text-overlay">
                        <h3>Phone Case</h3>
                        <div class="toggle-container">
                            <div class="feature-description">Durable & Lightweight Design</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Northlight’s body and case use ABS injection PC—a <strong>tough, lightweight</strong> plastic. Unlike premium phones that rely on metals like aluminum or titanium (which add modest weight and cost for their durability), ABS keeps the phone practical: lightweight for pockets and <strong>affordable without compromising</strong> everyday resilience.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Compact & Practical Size</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">At 74mm wide (2.91 inches), <strong>Northlight fits comfortably in all hands</strong>—no stretching to reach buttons or balancing acts to avoid drops. While others chase oversized screens, we prioritize portability: it slips into small bags, jeans pockets, or your palm effortlessly, proving bigger isn’t always better.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Ergonomic Curves for All-Day Comfort</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Designed with <strong>smooth, rounded edges</strong> and a matte finish, Northlight feels natural in your grip. The subtle curves fit snugly in palms of all sizes, whether you’re texting one-handed on a commute or snapping photos at a family BBQ. No sharp edges, no slippery surfaces—just practicality that works for everyone.</p>
                    </div>
                </div>

                <!-- Battery -->
                <div class="image-wrapper content" id="battery">
                    <img src="{{ asset('img/phone/battery.png') }}" alt="Detachable Battery" class="engineering-drawing">
                    <div class="text-overlay">
                        <h3>Detachable Battery</h3>
                        <div class="toggle-container">
                            <div class="feature-description">Easily Replaceable</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Northlight’s battery swaps in seconds with a <strong>tool-free latch system</strong>—no screws, no technician required. <strong>Simply pop off</strong> the case, <storng>replace</storng> the battery, and power up. Designed for everyone, from tech novices to busy parents, it’s as simple as changing a TV remote’s batteries.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Built for Daily Demands & Emergencies</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content"><strong>Keep a spare battery</strong> for all-day adventures, travel, or unexpected outages. Unlike sealed phones that leave you scrambling for a charger, Northlight ensures you’re never stranded. Swap in a fresh battery during a hike, flight, or blackout—because life doesn’t wait for a power outlet.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Replace the Battery, Not the Phone</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">When batteries degrade (as all do), Northlight lets you <strong>replace just the battery</strong>—not the entire phone. This eco-friendly approach cuts long-term costs and e-waste, aligning with our mission to make tech sustainable. Why discard a perfectly good phone over a $20 battery?</p>
                    </div>
                </div>

                <!-- microSD Card -->
                <div class="image-wrapper content" id="microSD">
                    <img src="{{ asset('img/phone/microSD_card.png') }}" alt="microSD Card" class="engineering-drawing">
                    <div class="text-overlay">
                        <h3>microSD Card</h3>
                        <div class="toggle-container">
                            <div class="feature-description">Affordable Expansion</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Expand your storage affordably with a <strong>microSD card</strong>—no need to buy a pricier high-storage model. Add up to <strong>512GB</strong> for photos, videos, and apps, keeping your budget intact while future-proofing your device.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Quick & Simple</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Just slide in a microSD card—<strong>no setup, no formatting</strong>. Northlight recognizes it instantly, letting you store files, transfer data, or free up space in seconds. Perfect for tech newcomers or anyone craving hassle-free solutions.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Backup Ready</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Use the microSD slot for <strong>reliable backups</strong> of family photos, work documents, or medical records. Unlike cloud storage (which needs Wi-Fi or subscriptions), your data stays offline, portable, and safe from accidental deletion—peace of mind in your pocket.</p>
                    </div>
                </div>

                <!-- Dual SIM Card -->
                <div class="image-wrapper content" id="sim-card">
                    <img src="{{ asset('img/phone/dualSIM_card.png') }}" alt="Dual SIM card" class="engineering-drawing">
                    <div class="text-overlay">
                        <h3>Dual Sim Card</h3>
                        <div class="toggle-container">
                            <div class="feature-description">Simplified Travel</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content"><strong>Swap to a local SIM card instantly</strong> when traveling abroad—no more exorbitant roaming fees. Keep your home number active for emergencies while using a local plan for data, calls, and maps. Perfect for globetrotters, students abroad, or business trips.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Effortless Switching</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content"><strong>Separate work and personal life</strong> seamlessly with Dual SIM. Assign one slot for client calls and another for family chats—no juggling phones or missing important updates. Ideal for freelancers, entrepreneurs, or anyone craving work-life balance.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Instant Switching</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Toggle between SIMs <strong>in seconds</strong> via software settings—no physical swapping needed. Pause your work line during dinner or activate a travel SIM mid-flight. Stay connected your way, without interruptions or delays.</p>
                    </div>
                </div>

                <!-- Camera -->
                <div class="image-wrapper content" id="camera">
                    <img src="{{ asset('img/phone/camera.png') }}" alt="camera" class="engineering-drawing">
                    <div class="text-overlay">
                        <h3>Camera</h3>
                        <div class="toggle-container">
                            <div class="feature-description">5MP Rear Camera & 2MP Front Camera</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">A <strong>5MP rear camera</strong> captures sharp, 5-million-pixel photos—ideal for scanning documents, QR codes, or snapping clear shots of notes at work. The <strong>2MP front camera</strong> handles video calls and quick selfies, ensuring you stay connected with loved ones. Both prioritize practicality over blindly chasing unneeded ultra-high pixels.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Designed for Daily Usage</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Northlight’s camera focuses on what truly matters: <strong>capturing life’s essentials</strong>. Scan receipts, sharing daily updates, or record your child’s first steps—all without fuss. While 48MP+ cameras excel in professional detail, most users don’t need extreme resolution for sharing moments with friends or preserving life’s simple joys.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Memory Over Megapixels</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">The best photos aren’t defined by resolution—they’re defined by moments. A blurry birthday cake or a sunlit family dinner holds more value than technical perfection. Northlight prioritizes <strong>preserving memories</strong>, not chasing specs, because life’s magic lies in the experience, not the pixels.</p>
                    </div>
                </div>

                <!-- Chip -->
                <div class="image-wrapper content" id="chip">
                    <img src="{{ asset('img/phone/chip.png') }}" alt="Chip" class="engineering-drawing">
                    <div class="text-overlay">
                        <h3>Chip</h3>
                        <div class="toggle-container">
                            <div class="feature-description">Mediatek Helio A22 MT6761</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">A <strong>Quad-Core 2.0GHz CPU</strong> (four processing units) efficiently handles daily tasks like messaging, browsing, social media, and streaming. While not for heavy gaming or 4K editing, it delivers smooth performance with energy efficiency—perfect for video calls, music, and apps that <strong>keep you connected</strong>.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Designed for Daily Usage</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">The Helio A22 chip handles daily tasks with smooth efficiency. Designed for users who prioritize <strong>practicality over specs</strong>, it delivers <strong>reliable</strong> performance <strong>without the cost</strong> of power you’ll never use.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Made by MediaTek & TSMC</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content"><strong>MediaTek</strong> (global leader in secure, efficient processors) partners with <strong>TSMC</strong> (Taiwan Semiconductor Manufacturing Company), the world’s top semiconductor maker. Together, they deliver rigorously tested Northlight chips—<strong>durable, secure, and affordable</strong>. Trusted engineering, without the premium cost.</p>
                    </div>
                </div>

                <!-- 3.5mm -->
                <div class="image-wrapper content" id="3.5mm">
                    <img src="{{ asset('img/phone/headphone_jack.png') }}" alt="3.5mm Headphone Jack" class="engineering-drawing">
                    <div class="text-overlay">
                        <h3>3.5mm Headphone Jack</h3>
                        <div class="toggle-container">
                            <div class="feature-description">Universal Compatibility</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">The 3.5mm headphone jack remains the <strong>universal standard</strong> for wired audio. Unlike USB-C-only phones, Northlight works <strong>seamlessly</strong> with any headphones—from dollarstore earbuds to premium headsets—without adapters or compatibility hassles.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Charge & Listen</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Keep your phone charging via USB-C while plugging in wired headphones—no more choosing between <strong>music and battery life</strong>. Perfect for long flights, road trips, or bedside Netflix binges where uninterrupted power and sound matter most.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Classic Convenience</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">The 3.5mm jack is a timeless, trusted feature. No batteries to charge, no settings to tweak—just plug in and enjoy instant, glitch-free audio. For users who crave <strong>simplicity</strong> (or hate fumbling with Bluetooth), it’s everyday ease, perfected.</p>
                    </div>
                </div>

                <!-- USB-C -->
                <div class="image-wrapper content" id="usb-c">
                    <img src="{{ asset('img/phone/usb_c.png') }}" alt="USB-C" class="engineering-drawing">
                    <div class="text-overlay">
                        <h3>USB-C</h3>
                        <div class="toggle-container">
                            <div class="feature-description">Universal Simplicity</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">USB-C is the <strong>global standard</strong> for modern devices—charge your phone, laptop, tablet, or earbuds with the same cable. No more juggling cords: transfer files, power up, or connect to monitors effortlessly. Simplify your tech life while saving money on extra accessories.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Future-Ready Tech</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">USB-C supports faster charging, 4K video output, and high-speed data transfers. <strong>Compatible</strong> with the latest laptops, chargers, and peripherals, it ensures Northlight stays relevant as tech evolves. <strong>No adapter</strong> headaches or outdated ports—just seamless compatibility for years to come.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Simple Connectivity</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">USB-C’s reversible design works flawlessly in any orientation—no flipping the plug three times. Whether you’re charging in the dark or rushing out the door, it’s <strong>hassle-free convenience</strong> for all ages. A small detail that makes everyday life smoother.</p>
                    </div>
                </div>

                <!-- Display -->
                <div class="image-wrapper content" id="display">
                    <img src="{{ asset('img/phone/display.png') }}" alt="display" class="engineering-drawing">
                    <div class="text-overlay">
                        <h3>Display</h3>
                        <div class="toggle-container">
                            <div class="feature-description">TFT LCD</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content"><strong>TFT LCD</strong> screens use a backlight to deliver bright, <strong>sunlight-friendly visuals</strong>, ideal for outdoor use. Unlike OLED (where each pixel emits its own light), LCDs prioritize affordability, durability, and no risk of screen burn-in. Perfect for users who value practicality over premium specs.</p>

                        <div class="toggle-container">
                            <div class="feature-description">480x960 Resolution</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">At <strong>197 PPI</strong> (pixels per inch), sharper than most TVs screen, this PPI keeps text sharp for messaging, social media, and casual browsing. While premium phones push 500+ PPI (better for billboard-sized prints), Northlight’s screen matches daily needs—clear photos for social posts, no battery drain from overkill pixel density.</p>

                        <div class="toggle-container">
                            <div class="feature-description">60Hz Refresh Rate</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">A <strong>60Hz refresh rate</strong> updates the screen 60 times per second, matching most TVs and laptops. It handles scrolling, videos, and light gaming smoothly, while avoiding the battery drain and added cost of 120Hz+ displays. Designed for reliability, not specs you’ll rarely notice.</p>
                    </div>
                </div>
            </div>
            <div class="disclaimer-desktop">*For demonstration purposes only. Actual parts, specifications, and measurements may vary. SIM and microSD cards not included.</div>
        </div>
    </div>

    <!-- Mobile Engineering Drawing -->
    <div class="bg-color">
        <div class="container mobile-container-padding" id="engineering-drawing-section-mobile">
            <div class="features-container-mobile">
                <div class="image-wrapper-mobile">
                    <img src="{{ asset('img/phone/Northlight-explosive-sketch-mobile.png') }}" alt="engineering drawing" class="engineering-drawing-mobile">
                    <svg class="circle-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 62.64 100">
                        {{-- <circle class="circle" cx="14.8" cy="34.5">
                            <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="sim-card-mobile" cx="14.8" cy="34.5" r="1.5" /> --}}

                        <circle class="circle" cx="4.5" cy="63.5">
                            <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="usb-c-mobile" cx="4.5" cy="63.5" r="1.5" />

                        {{-- <circle class="circle" cx="36.5" cy="22.5">
                            <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="battery-mobile" cx="36.5" cy="22.5" r="1.5" /> --}}

                        {{-- <circle class="circle" cx="18.7" cy="30.5">
                            <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="microSD-mobile" cx="18.7" cy="30.5" r="1.5" /> --}}

                        <circle class="circle" cx="32.5" cy="7.5">
                            <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="case-mobile" cx="32.5" cy="7.5" r="1.5" />

                        <circle class="circle" cx="32" cy="87">
                            <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="display-mobile" cx="32" cy="87" r="1.5" />

                        <circle class="circle" cx="8.5" cy="59.5">
                            <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="3.5mm-mobile" cx="8.5" cy="59.5" r="1.5" />

                        {{-- <circle class="circle" cx="16.5" cy="62.5">
                            <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="chip-mobile" cx="16.5" cy="62.5" r="1.5" /> --}}

                        <circle class="circle" cx="11.8" cy="43.5">
                            <animate attributeName="r" from="1.5" to="3" dur="2s" repeatCount="indefinite" />
                            <animate attributeName="fill" from="rgba(0, 123, 255, 0.7)" to="rgba(0, 123, 255, 0)" dur="2s" repeatCount="indefinite" />
                        </circle>
                        <circle class="circle-inner" data-target="camera-mobile" cx="11.8" cy="43.5" r="1.5" />
                    </svg>
                </div>

                <!-- Case -->
                <div class="feature-wrapper-mobile" id="case-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="{{ asset('img/phone/phone_case.png') }}" alt="Case" class="feature-background-mobile">
                    <div class="text-overlay-mobile">
                        <h3>Phone Case</h3>
                        <div class="toggle-container">
                            <div class="feature-description">Durable & Lightweight Design</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Northlight’s body and case use ABS injection PC—a <strong>tough, lightweight</strong> plastic. Unlike premium phones that rely on metals like aluminum or titanium (which add modest weight and cost for their durability), ABS keeps the phone practical: lightweight for pockets and <strong>affordable without compromising</strong> everyday resilience.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Compact & Practical Size</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">At 74mm wide (2.91 inches), <strong>Northlight fits comfortably in all hands</strong>—no stretching to reach buttons or balancing acts to avoid drops. While others chase oversized screens, we prioritize portability: it slips into small bags, jeans pockets, or your palm effortlessly, proving bigger isn’t always better.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Ergonomic Curves for All-Day Comfort</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Designed with <strong>smooth, rounded edges</strong> and a matte finish, Northlight feels natural in your grip. The subtle curves fit snugly in palms of all sizes, whether you’re texting one-handed on a commute or snapping photos at a family BBQ. No sharp edges, no slippery surfaces—just practicality that works for everyone.</p>
                    </div>
                </div>

                <!-- Battery -->
                <div class="feature-wrapper-mobile" id="battery-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="{{ asset('img/phone/battery.png') }}" alt="Detachable Battery" class="feature-background-mobile">
                    <div class="text-overlay-mobile">
                        <h3>Detachable Battery</h3>
                        <div class="toggle-container">
                            <div class="feature-description">Easily Replaceable</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Northlight’s battery swaps in seconds with a <strong>tool-free latch system</strong>—no screws, no technician required. <strong>Simply pop off</strong> the case, <storng>replace</storng> the battery, and power up. Designed for everyone, from tech novices to busy parents, it’s as simple as changing a TV remote’s batteries.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Built for Daily Demands & Emergencies</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content"><strong>Keep a spare battery</strong> for all-day adventures, travel, or unexpected outages. Unlike sealed phones that leave you scrambling for a charger, Northlight ensures you’re never stranded. Swap in a fresh battery during a hike, flight, or blackout—because life doesn’t wait for a power outlet.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Replace the Battery, Not the Phone</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">When batteries degrade (as all do), Northlight lets you <strong>replace just the battery</strong>—not the entire phone. This eco-friendly approach cuts long-term costs and e-waste, aligning with our mission to make tech sustainable. Why discard a perfectly good phone over a $20 battery?</p>
                    </div>
                </div>

                <!-- microSD Card -->
                <div class="feature-wrapper-mobile" id="microSD-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="{{ asset('img/phone/microSD_card.png') }}" alt="microSD Card" class="engineering-drawing-mobile">
                    <div class="text-overlay-mobile">
                        <h3>microSD Card</h3>
                        <div class="toggle-container">
                            <div class="feature-description">Affordable Expansion</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Expand your storage affordably with a <strong>microSD card</strong>—no need to buy a pricier high-storage model. Add up to <strong>512GB</strong> for photos, videos, and apps, keeping your budget intact while future-proofing your device.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Quick & Simple</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Just slide in a microSD card—<strong>no setup, no formatting</strong>. Northlight recognizes it instantly, letting you store files, transfer data, or free up space in seconds. Perfect for tech newcomers or anyone craving hassle-free solutions.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Backup Ready</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Use the microSD slot for <strong>reliable backups</strong> of family photos, work documents, or medical records. Unlike cloud storage (which needs Wi-Fi or subscriptions), your data stays offline, portable, and safe from accidental deletion—peace of mind in your pocket.</p>
                    </div>
                </div>

                <!-- Dual SIM Card -->
                <div class="feature-wrapper-mobile" id="sim-card-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="{{ asset('img/phone/dualSIM_card.png') }}" alt="SIM card" class="engineering-drawing-mobile">
                    <div class="text-overlay-mobile">
                        <h3>Dual Sim Card</h3>
                        <div class="toggle-container">
                            <div class="feature-description">Simplified Travel</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content"><strong>Swap to a local SIM card instantly</strong> when traveling abroad—no more exorbitant roaming fees. Keep your home number active for emergencies while using a local plan for data, calls, and maps. Perfect for globetrotters, students abroad, or business trips.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Effortless Switching</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content"><strong>Separate work and personal life</strong> seamlessly with Dual SIM. Assign one slot for client calls and another for family chats—no juggling phones or missing important updates. Ideal for freelancers, entrepreneurs, or anyone craving work-life balance.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Instant Switching</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Toggle between SIMs <strong>in seconds</strong> via software settings—no physical swapping needed. Pause your work line during dinner or activate a travel SIM mid-flight. Stay connected your way, without interruptions or delays.</p>
                    </div>
                </div>

                <!-- Camera -->
                <div class="feature-wrapper-mobile" id="camera-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="{{ asset('img/phone/camera.png') }}" alt="Camera" class="engineering-drawing-mobile">
                    <div class="text-overlay-mobile">
                        <h3>Camera</h3>
                        <div class="toggle-container">
                            <div class="feature-description">5MP Rear Camera & 2MP Front Camera</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">A <strong>5MP rear camera</strong> captures sharp, 5-million-pixel photos—ideal for scanning documents, QR codes, or snapping clear shots of notes at work. The <strong>2MP front camera</strong> handles video calls and quick selfies, ensuring you stay connected with loved ones. Both prioritize practicality over blindly chasing unneeded ultra-high pixels.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Designed for Daily Usage</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Northlight’s camera focuses on what truly matters: <strong>capturing life’s essentials</strong>. Scan receipts, sharing daily updates, or record your child’s first steps—all without fuss. While 48MP+ cameras excel in professional detail, most users don’t need extreme resolution for sharing moments with friends or preserving life’s simple joys.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Memory Over Megapixels</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">The best photos aren’t defined by resolution—they’re defined by moments. A blurry birthday cake or a sunlit family dinner holds more value than technical perfection. Northlight prioritizes <strong>preserving memories</strong>, not chasing specs, because life’s magic lies in the experience, not the pixels.</p>
                    </div>
                </div>

                <!-- Chip -->
                <div class="feature-wrapper-mobile" id="chip-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="{{ asset('img/phone/chip.png') }}" alt="Chip" class="engineering-drawing-mobile">
                    <div class="text-overlay-mobile">
                        <h3>Chip</h3>
                        <div class="toggle-container">
                            <div class="feature-description">Mediatek Helio A22 MT6761</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">A <strong>Quad-Core 2.0GHz CPU</strong> (four processing units) efficiently handles daily tasks like messaging, browsing, social media, and streaming. While not for heavy gaming or 4K editing, it delivers smooth performance with energy efficiency—perfect for video calls, music, and apps that <strong>keep you connected</strong>.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Designed for Daily Usage</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">The Helio A22 chip handles daily tasks with smooth efficiency. Designed for users who prioritize <strong>practicality over specs</strong>, it delivers <strong>reliable</strong> performance <strong>without the cost</strong> of power you’ll never use.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Made by MediaTek & TSMC</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content"><strong>MediaTek</strong> (global leader in secure, efficient processors) partners with <strong>TSMC</strong> (Taiwan Semiconductor Manufacturing Company), the world’s top semiconductor maker. Together, they deliver rigorously tested Northlight chips—<strong>durable, secure, and affordable</strong>. Trusted engineering, without the premium cost.</p>
                    </div>
                </div>

                <!-- 3.5mm -->
                <div class="feature-wrapper-mobile" id="3.5mm-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="{{ asset('img/phone/headphone_jack.png') }}" alt="3.5mm Headphone Jack" class="engineering-drawing-mobile">
                    <div class="text-overlay-mobile">
                        <h3>3.5mm Headphone Jack</h3>
                        <div class="toggle-container">
                            <div class="feature-description">Universal Compatibility</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">The 3.5mm headphone jack remains the <strong>universal standard</strong> for wired audio. Unlike USB-C-only phones, Northlight works <strong>seamlessly</strong> with any headphones—from dollarstore earbuds to premium headsets—without adapters or compatibility hassles.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Charge & Listen</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">Keep your phone charging via USB-C while plugging in wired headphones—no more choosing between <strong>music and battery life</strong>. Perfect for long flights, road trips, or bedside Netflix binges where uninterrupted power and sound matter most.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Classic Convenience</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">The 3.5mm jack is a timeless, trusted feature. No batteries to charge, no settings to tweak—just plug in and enjoy instant, glitch-free audio. For users who crave <strong>simplicity</strong> (or hate fumbling with Bluetooth), it’s everyday ease, perfected.</p>
                    </div>
                </div>

                <!-- USB-C -->
                <div class="feature-wrapper-mobile" id="usb-c-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="{{ asset('img/phone/usb_c.png') }}" alt="USB-C" class="engineering-drawing-mobile">
                    <div class="text-overlay-mobile">
                        <h3>USB-C</h3>
                        <div class="toggle-container">
                            <div class="feature-description">Universal Simplicity</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">USB-C is the <strong>global standard</strong> for modern devices—charge your phone, laptop, tablet, or earbuds with the same cable. No more juggling cords: transfer files, power up, or connect to monitors effortlessly. Simplify your tech life while saving money on extra accessories.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Future-Ready Tech</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">USB-C supports faster charging, 4K video output, and high-speed data transfers. <strong>Compatible</strong> with the latest laptops, chargers, and peripherals, it ensures Northlight stays relevant as tech evolves. <strong>No adapter</strong> headaches or outdated ports—just seamless compatibility for years to come.</p>

                        <div class="toggle-container">
                            <div class="feature-description">Simple Connectivity</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">USB-C’s reversible design works flawlessly in any orientation—no flipping the plug three times. Whether you’re charging in the dark or rushing out the door, it’s <strong>hassle-free convenience</strong> for all ages. A small detail that makes everyday life smoother.</p>
                    </div>
                </div>

                <!-- Display -->
                <div class="feature-wrapper-mobile" id="display-mobile">
                    <i class="fa-solid fa-xmark xmark"></i>
                    <img src="{{ asset('img/phone/display.png') }}" alt="display" class="engineering-drawing-mobile">
                    <div class="text-overlay-mobile">
                        <h3>Display</h3>
                        <div class="toggle-container">
                            <div class="feature-description">TFT LCD</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content"><strong>TFT LCD</strong> screens use a backlight to deliver bright, <strong>sunlight-friendly visuals</strong>, ideal for outdoor use. Unlike OLED (where each pixel emits its own light), LCDs prioritize affordability, durability, and no risk of screen burn-in. Perfect for users who value practicality over premium specs.</p>

                        <div class="toggle-container">
                            <div class="feature-description">480x960 Resolution</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">At <strong>197 PPI</strong> (pixels per inch), sharper than most TVs screen, this PPI keeps text sharp for messaging, social media, and casual browsing. While premium phones push 500+ PPI (better for billboard-sized prints), Northlight’s screen matches daily needs—clear photos for social posts, no battery drain from overkill pixel density.</p>

                        <div class="toggle-container">
                            <div class="feature-description">60Hz Refresh Rate</div>
                            <i class="fa-solid fa-angle-right arrow"></i>
                        </div>
                        <p class="toggle-content">A <strong>60Hz refresh rate</strong> updates the screen 60 times per second, matching most TVs and laptops. It handles scrolling, videos, and light gaming smoothly, while avoiding the battery drain and added cost of 120Hz+ displays. Designed for reliability, not specs you’ll rarely notice.</p>
                    </div>
                </div>
            </div>
            <div class="disclaimer-mobile">*For demonstration purposes only. Actual parts, specifications, and measurements may vary. SIM and microSD cards not included.</div>
        </div>
    </div>

    {{-- <div class="container">
        <h1 class="section-padding-sm text-center">Designed for Real Life</h1>
        <div class="row bottom-padding-sm gx-lg-5">
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="{{ asset('img/phone/phone_photo_3.png') }}" alt="young users" class="rounded-img">
            </div>
            <div class="col-lg-6 mt-0 d-flex align-items-start order-2 order-lg-1">
                <div class="senario-wrap">
                    <h3 class="pb-3">First Phone for Young Users</h3>
                    <div class="toggle-container">
                        <div class="feature-description">Ideal for Young Users</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content text-black">Northlight's 5.45" screen is compact and easy to hold, making it perfect for smaller hands or pockets. Android 14's parental controls help manage screen time and app access, ensuring a safe experience.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Durability and Practicality</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content text-black">With expandable storage for school projects and photos, plus a replaceable battery, Northlight encourages users to manage their device responsibly, without relying on it constantly.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Grows with the User</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content text-black">Designed for teens and students, Northlight offers a durable, no-frills experience with no fragile screens or expensive price tags—perfect for calls, social media, and everyday use.</p>
                </div>
            </div>
        </div>

        <div class="row bottom-padding-sm gx-lg-5">
            <div class="col-lg-6">
                <img src="{{ asset('img/phone/phone_photo_4.jpg') }}" alt="business users" class="rounded-img">
            </div>
            <div class="col-lg-6 mt-0 d-flex align-items-start">
                <div class="senario-wrap">
                    <h3 class="pb-3">Reliable Phone for Business</h3>
                    <div class="toggle-container">
                        <div class="feature-description">Cost-Effective Efficiency</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content text-black">Northlight’s Dual SIM functionality separates work and personal lines, while Android 14’s enterprise tools (remote wipe, spam blocking) and microSD encryption ensure data security.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Reliable for Busy Teams</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content text-black">Replaceable batteries provide 24/7 uptime for field teams and shift workers, making Northlight a dependable option for businesses that require constant connectivity.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Budget-Friendly and Durable</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content text-black">Perfect for startups, NGOs, or small businesses, Northlight offers rugged, practical phones that prioritize productivity and easy repairs, keeping bulk purchases cost-effective.</p>
                </div>
            </div>
        </div>

        <div class="row bottom-padding-sm gx-lg-5">
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="{{ asset('img/phone/phone_photo_5.png') }}" alt="senior users" class="rounded-img">
            </div>
            <div class="col-lg-6 mt-0 d-flex align-items-start order-2 order-lg-1">
                <div class="senario-wrap">
                    <h3 class="pb-3">Simplified Phone for Seniors</h3>
                    <div class="toggle-container">
                        <div class="feature-description">Classic Simplicity Meets Modern Tech</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content text-black">Northlight combines a replaceable battery and 3.5mm headphone jack with Android 14’s larger icons and loudspeakers, offering both nostalgia and ease of use.</p>

                    <div class="toggle-container">
                        <div class="feature-description">User-Friendly Design</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content text-black">Ergonomic curves prevent slips, and the intuitive interface makes tasks like video calls, prescriptions, and banking apps simple, reducing frustration for all users.</p>

                    <div class="toggle-container">
                        <div class="feature-description">Perfect for Those Seeking Simplicity</div>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content text-black">Ideal for grandparents reconnecting with family or retirees managing daily tasks, Northlight is designed for users who want tech that respects their pace.</p>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container">
        <h1 class="fw-bold text-center section-padding-sm">Accessories</h1>
        <div class="row bottom-padding">
            <div class="col-lg-4">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-4 p-2">
                            <img src="{{ asset('img/accessories/battery.jpg') }}" class="northlight-accessory-img rounded-start" alt="...">
                        </div>
                        <div class="col-8 d-flex align-items-center">
                            <div class="card-body">
                                <h5 class="card-title">Battery</h5>
                                <p class="card-text">Replaceable battery for uninterrupted power, keeping you connected all day.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card" style="--bs-body-bg: #f6f6f6;">
                    <div class="row g-0">
                        <div class="col-4 p-2">
                            <img src="{{ asset('img/accessories/battery_charger.jpg') }}" class="northlight-accessory-img rounded-start" alt="...">
                        </div>
                        <div class="col-8 d-flex align-items-center">
                            <div class="card-body">
                                <h5 class="card-title">Battery Charger</h5>
                                <p class="card-text">Compact and efficient charger designed specially for Northlight batteries.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-4 p-2">
                            <img src="{{ asset('img/accessories/microSD_card.jpg') }}" class="northlight-accessory-img rounded-start" alt="...">
                        </div>
                        <div class="col-8 d-flex align-items-center">
                            <div class="card-body">
                                <h5 class="card-title">microSD Card</h5>
                                <p class="card-text">Upgrade your phone with reliable microSD cards for extra storage.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('js/northlight.js') }}"></script>
@endpush
