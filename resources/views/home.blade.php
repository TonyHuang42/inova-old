@extends('layouts.app')

@section('title', 'INOVA')
@section('meta_description', 'INOVA')
@push('styles')
    <style>
        .row {
            --bs-gutter-y: 1.5rem;
        }

        .card-title {
            font-size: 24px;
            font-weight: 600;
            margin: 10px 0 0 10px;
        }

        .accessories-title-padding {
            padding: 50px 0 14px 0;
        }

        .home-slider-padding {
            padding-top: 36px;
        }

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
            <a href="/about-us#purpose" class="text-white">
                <div class="row pb-5 text-center gx-md-5">
                    <div class="col-12 col-md-4">
                        <img src="{{ asset('img/about/icon_accessible.svg') }}" alt="accessibility" class="values-icon">
                        <div class="about-title pt-2 pb-3">Accessibility</div>
                        <p>Features and pricing that make sense for everyone.</p>
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="{{ asset('img/about/icon_simplicity.svg') }}" alt="simplicity" class="values-icon">
                        <div class="about-title pt-2 pb-3">Simplicity</div>
                        <p>Designs are straightforward, without<span class="d-xxl-none d-xl-inline d-none"><br></span> complexity.</p>
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="{{ asset('img/about/icon_community.svg') }}" alt="community" class="values-icon">
                        <div class="about-title pt-2 pb-3">Community</div>
                        <p>Brings people together with our innovative product.</p>
                    </div>
                </div>
            </a>
            <div class="row bottom-padding">
                <div class="col-12 text-center">
                    <a class="learn-more-button" href="/about-us">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="section-padding-sm">
            <div class="row bottom-padding-sm">
                <div class="col-12 col-md-8">
                    <div class="title fw-bold">All in Our Products</div>
                </div>
                <div class="col-12 col-md-4 d-flex align-items-end justify-content-end">
                    <a href="/northlight" class="underline-link">
                        Experience it now <i class="fa-solid fa-angle-right"></i>
                    </a>
                </div>
            </div>

            <a href="/northlight">
                <img src="{{ asset('img/home/banner_northlight.png') }}" alt="Banner" class="rounded-img">

                {{-- <div class="northlight-banner-container rounded-img">
                    <img src="{{ asset('img/phone/banner/BG.jpg') }}" alt="banner" class="phone-banner">
                    <img src="{{ asset('img/phone/banner/phone.png') }}" alt="phone" class="phone-banner-phone">
                    <img src="{{ asset('img/phone/banner/northlight.png') }}" alt="northlight" class="phone-banner-northlight">
                    <img src="{{ asset('img/phone/banner/slogan.png') }}" alt="slogan" class="phone-banner-slogan">
            
                    <div class="d-none d-xl-flex">
                        <a class="highlight-wrap" data-target="camera" href="/northlight#engineering-drawing-section">
                            <img src="{{ asset('img/phone/banner/desktop_bubbles/bubble_camera.png') }}" 
                            alt="features" class="phone-banner-features" style="top: 42%; left: 19%;">
                        </a>
            
                        <a class="highlight-wrap" data-target="display" href="/northlight#engineering-drawing-section">
                            <img src="{{ asset('img/phone/banner/desktop_bubbles/bubble_screen.png') }}" 
                            alt="features" class="phone-banner-features" style="top: 42%; left: 77%;">
                        </a>
            
                        <a class="highlight-wrap" data-target="battery" href="/northlight#engineering-drawing-section">
                            <img src="{{ asset('img/phone/banner/desktop_bubbles/bubble_battery.png') }}" 
                            alt="features" class="phone-banner-features" style="top: 64%; left: 15%;">
                        </a>
            
                        <a class="highlight-wrap" data-target="sim-card" href="/northlight#engineering-drawing-section">
                            <img src="{{ asset('img/phone/banner/desktop_bubbles/bubble_SIMs.png') }}" 
                            alt="features" class="phone-banner-features" style="top: 64%; left: 85%;">
                        </a>
            
                        <a class="highlight-wrap" data-target="chip" href="/northlight#engineering-drawing-section">
                            <img src="{{ asset('img/phone/banner/desktop_bubbles/bubble_chip.png') }}" 
                            alt="features" class="phone-banner-features" style="top: 86%; left: 20%;">
                        </a>
            
                        <a class="highlight-wrap" data-target="microSD" href="/northlight#engineering-drawing-section">
                            <img src="{{ asset('img/phone/banner/desktop_bubbles/bubble_SDCard.png') }}" 
                            alt="features" class="phone-banner-features" style="top: 86%; left: 82%;">
                        </a>
                    </div>
            
                    <div class="d-xl-none d-md-flex d-none">
                        <a class="highlight-wrap" data-target="camera-mobile" href="/northlight#engineering-drawing-section-mobile">
                            <img src="{{ asset('img/phone/banner/desktop_bubbles/bubble_camera.png') }}" 
                            alt="features" class="phone-banner-features" style="top: 42%; left: 19%;">
                        </a>
            
                        <a class="highlight-wrap" data-target="display-mobile" href="/northlight#engineering-drawing-section-mobile">
                            <img src="{{ asset('img/phone/banner/desktop_bubbles/bubble_screen.png') }}" 
                            alt="features" class="phone-banner-features" style="top: 42%; left: 77%;">
                        </a>
            
                        <a class="highlight-wrap" data-target="battery-mobile" href="/northlight#engineering-drawing-section-mobile">
                            <img src="{{ asset('img/phone/banner/desktop_bubbles/bubble_battery.png') }}" 
                            alt="features" class="phone-banner-features" style="top: 64%; left: 15%;">
                        </a>
            
                        <a class="highlight-wrap" data-target="sim-card-mobile" href="/northlight#engineering-drawing-section-mobile">
                            <img src="{{ asset('img/phone/banner/desktop_bubbles/bubble_SIMs.png') }}" 
                            alt="features" class="phone-banner-features" style="top: 64%; left: 85%;">
                        </a>
            
                        <a class="highlight-wrap" data-target="chip-mobile" href="/northlight#engineering-drawing-section-mobile">
                            <img src="{{ asset('img/phone/banner/desktop_bubbles/bubble_chip.png') }}" 
                            alt="features" class="phone-banner-features" style="top: 86%; left: 20%;">
                        </a>
            
                        <a class="highlight-wrap" data-target="microSD-mobile" href="/northlight#engineering-drawing-section-mobile">
                            <img src="{{ asset('img/phone/banner/desktop_bubbles/bubble_SDCard.png') }}" 
                            alt="features" class="phone-banner-features" style="top: 86%; left: 82%;">
                        </a>
                    </div>
            
                    <div class="d-md-none">
                        <a class="highlight-wrap" data-target="camera-mobile" href="/northlight#engineering-drawing-section-mobile">
                            <img src="{{ asset('img/phone/banner/mobile_bubbles/bubble_camera.png') }}" 
                            alt="features" class="phone-banner-features" style="top: 27%; left: 25%;">
                        </a>
            
                        <a class="highlight-wrap" data-target="display-mobile" href="/northlight#engineering-drawing-section-mobile">
                            <img src="{{ asset('img/phone/banner/mobile_bubbles/bubble_screen.png') }}" 
                            alt="features" class="phone-banner-features" style="top: 27%; left: 50%;">
                        </a>
            
                        <a class="highlight-wrap" data-target="battery-mobile" href="/northlight#engineering-drawing-section-mobile">
                            <img src="{{ asset('img/phone/banner/mobile_bubbles/bubble_battery.png') }}" 
                            alt="features" class="phone-banner-features" style="top: 27%; left: 75%;">
                        </a>
            
                        <a class="highlight-wrap" data-target="sim-card-mobile" href="/northlight#engineering-drawing-section-mobile">
                            <img src="{{ asset('img/phone/banner/mobile_bubbles/bubble_SIMs.png') }}" 
                            alt="features" class="phone-banner-features" style="top: 37%; left: 25%;">
                        </a>
            
                        <a class="highlight-wrap" data-target="chip-mobile" href="/northlight#engineering-drawing-section-mobile">
                            <img src="{{ asset('img/phone/banner/mobile_bubbles/bubble_chip.png') }}" 
                            alt="features" class="phone-banner-features" style="top: 37%; left: 50%;">
                        </a>
            
                        <a class="highlight-wrap" data-target="microSD-mobile" href="/northlight#engineering-drawing-section-mobile">
                            <img src="{{ asset('img/phone/banner/mobile_bubbles/bubble_SDCard.png') }}" 
                            alt="features" class="phone-banner-features" style="top: 37%; left: 75%;">
                        </a>
                    </div>
                </div> --}}
            </a>

            <div class="title accessories-title-padding">Accessories</div>

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
                slidesToShow: 4,
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
                }]
            });
        });
    </script>
@endpush
