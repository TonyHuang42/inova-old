@extends('layouts.app')

@section('content')
    <section class="banner locations-banner">
        <div class="container position-relative h-100">
            <div class="about-banner-text">
                <h1 class="banner-text-sm">KINGSMAN EDUCATION CENTERS</h1>
                <div class="banner-text">Find a Location Near You</div>
            </div>
        </div>
    </section>

    <section class="container" id="centers">
        <div class="row section-padding bottom-padding-sm gy-md-0">
            <div class="col-12 col-lg-7 mx-auto text-center">
                <h3 class="red-text mb-0">Visit our campus and see Kingsman in action. Schedule an appointment with our team.</h3>
            </div>
        </div>

        <div class="row text-center bottom-padding gy-md-0">
            <div class="col-md-6">
                <img src="{{ asset('img/academic/img_curriculum_1.jpg') }}" alt="Marpole Center" class="img-fluid">
                <h3 class="mt-5">Marpole Center</h3>
                <p class="mt-3">1750 W75th Ave, Vancouver<br>123-456-7890</p>
                <p class="fw-bold mb-0">Office Hours</p>
                <p>Mon - Fri: 10am - 6pm</p>
                <a href="{{ url('/') }}" class="link">MORE INFO</a>
                <span> · </span>
                <a href="{{ url('/') }}" class="link">SCHEDULE A TOUR</a>
            </div>

            <div class="col-md-6">
                <img src="{{ asset('img/academic/img_curriculum_2.jpg') }}" alt="Fraserview Center" class="img-fluid">
                <h3 class="mt-5">Fraserview Center</h3>
                <p class="mt-3">1750 W75th Ave, Vancouver<br>123-456-7890</p>
                <p class="fw-bold mb-0">Office Hours</p>
                <p>Mon - Fri: 10am - 6pm</p>
                <a href="{{ url('/') }}" class="link">MORE INFO</a>
                <span> · </span>
                <a href="{{ url('/') }}" class="link">SCHEDULE A TOUR</a>
            </div>
        </div>
    </section>

@endsection
