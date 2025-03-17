@extends('layouts.app')

@section('title', 'Accessories - INOVA')
@section('meta_description', 'INOVA')
@push('styles')
    <style>
        .card {
            margin-bottom: 20px;
        }

        .card-body {
            padding-left: 0;
        }

        .card-title {
            font-size: 24px;
            font-weight: 600;
        }

        .accessory-image-container {
            background-color: #eee;
            width: 100%;
            aspect-ratio: 2/3;
            display: flex;
            justify-content: left;
            align-items: center;
        }

        .accessory-image {
            width: 100%;
        }

        .filter-btn {
            text-wrap: nowrap;
        }

        .filter-btn.active {
            text-decoration: underline;
            text-underline-offset: 5px;
        }

        @media only screen and (max-width: 575px) {
            .filter-btn {
                padding: 10px 5px;
            }
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="heading-container">
            <div class="heading">Accessories</div>
        </div>

        <div class="accessory-nav">
            <div class="accessory-filter">
                <div class="filter-btn active ps-0" data-category="all">All</div>
                <div class="filter-btn" data-category="power">Power</div>
                <div class="filter-btn text-nowrap" data-category="protection">Protection</div>
                <div class="filter-btn me-0" data-category="storage">Storage</div>
            </div>
        </div>

        <div class="row">
            <div class="col-6 col-md-4 col-lg-3 accessory" data-category="power" id="battery">
                <div class="card">
                    <div class="accessory-image-container">
                        <img src="{{ asset('img/accessories/battery.jpg') }}" alt="battery" class="img-fluid accessory-image">
                    </div>
                    <div class="card-body">
                        <div class="card-title">Battery</div>
                        <div class="card-text">Replaceable battery for uninterrupted power, keeping you connected all day.</div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 accessory" data-category="power" id="battery_charger">
                <div class="card">
                    <div class="accessory-image-container">
                        <img src="{{ asset('img/accessories/battery_charger.jpg') }}" alt="battery" class="img-fluid accessory-image">
                    </div>
                    <div class="card-body">
                        <div class="card-title">Battery Charger</div>
                        <div class="card-text">Compact and efficient charger designed specially for Northlight batteries.</div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 accessory" data-category="protection" id="phone_case">
                <div class="card">
                    <div class="accessory-image-container">
                        <img src="{{ asset('img/accessories/phone_case.jpg') }}" alt="battery" class="img-fluid accessory-image">
                    </div>
                    <div class="card-body">
                        <div class="card-title">Phone Case</div>
                        <div class="card-text">Durable and stylish protection designed to keep your phone safe from daily wear and tear.</div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 accessory" data-category="storage" id="microSD_card">
                <div class="card">
                    <div class="accessory-image-container">
                        <img src="{{ asset('img/accessories/microSD_card.jpg') }}" alt="battery" class="img-fluid accessory-image">
                    </div>
                    <div class="card-body">
                        <div class="card-title">microSD Card</div>
                        <div class="card-text">Upgrade your phone with reliable microSD cards for extra storage.</div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 accessory" data-category="power" id="usb_cable">
                <div class="card">
                    <div class="accessory-image-container">
                        <img src="{{ asset('img/accessories/USB-C_cable.jpg') }}" alt="battery" class="img-fluid accessory-image">
                    </div>
                    <div class="card-body">
                        <div class="card-title">USB-C Cable</div>
                        <div class="card-text">Fast and reliable charging with a durable USB-C cable built for convenience.</div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 accessory" data-category="power" id="power_adapter">
                <div class="card">
                    <div class="accessory-image-container">
                        <img src="{{ asset('img/accessories/power_adapter.jpg') }}" alt="battery" class="img-fluid accessory-image">
                    </div>
                    <div class="card-body">
                        <div class="card-title">Power Adapter</div>
                        <div class="card-text">Compact and efficient adapter to power your devices safely and quickly.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const filterButtons = document.querySelectorAll(".filter-btn");
            const cards = document.querySelectorAll(".accessory");

            filterButtons.forEach(button => {
                button.addEventListener("click", () => {
                    const category = button.getAttribute("data-category");
                    filterButtons.forEach(btn => btn.classList.remove("active"));
                    button.classList.add("active");

                    cards.forEach(card => {
                        if (category === "all" || card.getAttribute("data-category") === category) {
                            card.style.display = "block";
                        } else {
                            card.style.display = "none";
                        }
                    });
                });
            });
        });
    </script>
@endpush
