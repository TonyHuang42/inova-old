@extends('layouts.app')

@section('title', 'INOVA Canada | Technology for All, Connect Communities')
@section('meta_description', 'INOVA: Bridging gaps with simple, community-driven tech. Explore our mission to empower connections through accessible, affordable innovation.')

@section('content')
<div class="about-banner-container">
    <div class="container">
        <p>About Us</p>
        <div class="heading">Technology for All, Connect Communities</div>
    </div>
</div>

<div class="container section-padding">
    <div class="text-center bottom-padding about-text">INOVA was born from the idea that technology should be accessible and bring people closer. Our journey is guided by a commitment to affordability and community support, as we strive to create products that empower our users and foster connections between users and their communities.</div>

    <div class="about-banner2-container">
        <div class="row">
            <div class="col-12 col-lg-6" style="padding-left: 50px;">
                <div class="about-text">Our products are designed to fade into the background of your life—so you can focus on what truly matters: the people, moments, and relationships that define you.</div>
            </div>
        </div>
    </div>

    <div class="row text-center top-margin">
        <div class="col-12 col-md-6 pe-md-5">
            <div class="about-title mission-vision"><span class="fw-normal">OUR</span> MISSION</div>
            <p>Our mission is to make technology a universal bridge—simple, affordable, and designed for human connection.</p>
        </div>

        <div class="col-12 col-md-6 ps-md-5">
            <div class="about-title mission-vision"><span class="fw-normal">OUR</span> VISION</div>
            <p>Our vision is to continue creating innovative, accessible technology that enables everyone to seamlessly stay connected.</p>
        </div>
    </div>
</div>

<div class="bg-black text-white" id="purpose">
    <div class="container">
        <div class="row section-padding">
            <div class="col-12 col-md-8">
                <div class="title fw-bold">Designed with A Purpose</div>
            </div>
            <div class="col-12 col-md-4 d-flex align-items-end justify-content-end">
                <a href="/northlight" class="underline-link underline-link-white" style="color: white !important;">
                    Witness the impact <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>
        </div>

        <div class="row text-center bottom-padding gx-md-5">
            <div class="col-12 col-md-4">
                <img src="{{ asset('img/about/icon_accessible.svg') }}" alt="accessibility" class="values-icon">
                <div class="about-title pt-2 pb-3">Accessibility</div>
                <p>We ensure technology is accessible to everyone, with inclusive pricing and features designed for all ages, abilities, and budgets—because innovation should never leave people behind.</p>
            </div>
            <div class="col-12 col-md-4">
                <img src="{{ asset('img/about/icon_simplicity.svg') }}" alt="simplicity" class="values-icon">
                <div class="about-title pt-2 pb-3">Simplicity</div>
                <p>We design technology that works for you, not against you. Our intuitive interfaces and purposeful features strip away complexity, helping you navigate daily life with ease—no manuals required.</p>
            </div>
            <div class="col-12 col-md-4">
                <img src="{{ asset('img/about/icon_community.svg') }}" alt="community" class="values-icon">
                <div class="about-title pt-2 pb-3">Community</div>
                <p>We’re more than a tech company—we’re community partners. Our designs empower neighborhoods, families, and friends to connect, collaborate, and thrive together.</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row section-padding">
        <div class="col-12 col-md-6">
            <div class="title fw-bold">Building Bridges, <br>Not Just Devices</div>
        </div>
        <div class="col-12 col-md-6">
            <p>At INOVA, every product we create—from the Northlight Smartphone to future innovations—is a bridge. A bridge between generations sharing stories, between small businesses and their customers, and between isolated communities and the wider world. We don’t engineer gadgets; we craft tools that dissolve barriers, simplify connection, and empower people to focus on what truly matters: each other.</p>
        </div>
    </div>
</div>
@endsection
