@extends('layouts.app')

@section('content')
    <section class="banner about-banner">
        <div class="container position-relative h-100">
            <div class="about-banner-text">
                <h1 class="banner-text-sm">ABOUT US</h1>
                <div class="banner-text">We educate families<br> not just children</div>
            </div>
        </div>
    </section>

    <section class="sub-nav">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="d-flex justify-content-between gap-3">
                        <a href="{{ url('#holistic-education') }}" class="text-center link-white">HOLISTIC EDUCATION</a>
                        <a href="{{ url('#guiding-principles') }}" class="text-center link-white">GUIDING PRINCIPLES</a>
                        <a href="{{ url('#our-journey') }}" class="text-center link-white">OUR JOURNEY</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Holistic Education --}}
    <section class="container" id="holistic-education">
        <div class="row section-padding bottom-padding-sm">
            <div class="col-12 col-lg-8 mx-auto text-center">
                <div class="sub-title">HOLISTIC EDUCATION</div>
                <h2>At Kingsman, learning extends beyond the classroom.</h2>
                <p class="mb-0">Because we believe true education must nurture both knowledge and character. Modern systems often prioritize academic achievement at the cost of inner resilience, respect, and responsibility—values that build compassionate leaders. Our curriculum bridges this gap by blending modern pedagogy with timeless principles.</p>
                <div class="vertical-line-wrapper">
                    <div class="vertical-line"></div>
                </div>
                <h2>Child Development</h2>
                <p class="mb-0">At Kingsman, respect, responsibility, and empathy aren’t just taught—they’re lived. While many schools prioritize grades, we prepare children to lead with integrity because skills like problem-solving mean little without the maturity to use them ethically. This is what sets us apart.</p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-6 col-lg-3">
                <img src="{{ asset('img/about/icon_skill.svg') }}" alt="Building Lifelong Skills" class="child-development-icon">
                <h4 class="text-nowrap-sm mt-lg-5 mt-3">Lifelong Skills</h4>
                <p class="mb-lg-0">Guiding children to develop confidence, independence, and empathy in practice.</p>
            </div>

            <div class="col-6 col-lg-3">
                <img src="{{ asset('img/about/icon_decision_making.svg') }}" alt="Decision-Making" class="child-development-icon">
                <h4 class="text-nowrap-sm mt-lg-5 mt-3">Decision-Making</h4>
                <p class="mb-lg-0">Teaching children to assess challenges and make thoughtful, confident choices.</p>
            </div>

            <div class="col-6 col-lg-3">
                <img src="{{ asset('img/about/icon_critical_thinking.svg') }}" alt="Critical Thinking" class="child-development-icon">
                <h4 class="text-nowrap-sm mt-lg-5 mt-3">Critical Thinking</h4>
                <p class="mb-lg-0">Fostering curiosity and problem-solving skills to navigate the world around them.</p>
            </div>

            <div class="col-6 col-lg-3">
                <img src="{{ asset('img/about/icon_communication.svg') }}" alt="Communication" class="child-development-icon">
                <h4 class="text-nowrap-sm mt-lg-5 mt-3">Communication</h4>
                <p class="mb-lg-0">Empowering children to express ideas, listen actively, and collaborate respectfully.</p>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row section-padding">
            <div class="col-6 col-lg-3 order-2 order-lg-1 d-flex align-items-center">
                <img src="{{ asset('img/about/img_1.jpg') }}" alt="img-3" class="img-fluid scroll-move-img scroll-move-up">
            </div>
            <div class="col-6 col-lg-3 order-2 order-lg-1 d-flex align-items-center">
                <img src="{{ asset('img/about/img_2.jpg') }}" alt="img-4" class="img-fluid scroll-move-img">
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-center order-1 order-lg-2">
                <div class="welcome-text">
                    <h2>Parent Empowerment</h2>
                    <p>Education thrives when schools and families share the same values. At Kingsman, we empower parents because respect and responsibility begin at home—and grow in the classroom.</p>
                    <p class="fw-semibold">Workshops  ·   Resources  ·  1:1 Coaching</p>
                    {{-- <a href="{{ url('/') }}" class="link">Workshops</a>
                    <span> · </span>
                    <a href="{{ url('/') }}" class="link">Resources</a>
                    <span> · </span>
                    <a href="{{ url('/') }}" class="link">1:1 Coaching</a> --}}
                </div>
            </div>
        </div>
    </section>

    {{-- Guiding Principles --}}
    <section class="wave-bg" id="guiding-principles">
        <div class="container text-center">
            <div class="row top-padding">
                <div class="col-12 col-lg-8 mx-auto text-center">
                    <div class="sub-title text-white">GUIDING PRINCIPLES</div>
                    <h2>Core Values for Ethical Leaders</h2>
                    <p class="mb-0">Modern education often sacrifices character for achievement. Our values ensure children excel without losing empathy, integrity, or resilience.</p>
                    <div class="vertical-line-wrapper">
                        <div class="vertical-line vertical-line-white"></div>
                    </div>
                </div>
            </div>

            <div class="row bottom-padding text-center">
                <div class="col-6 col-lg-3 dynamic-learning-container">
                    <div class="dynamic-learning-image-wrapper">
                        <img src="{{ asset('img/about/img_core_1.jpg') }}" alt="Respect & Responsibility" class="img-fluid">
                        <h4 class="dynamic-learning-text mb-0 lh-base" style="border-radius: 0;">
                            Respect<br>Responsibility<br>Dignity
                        </h4>
                    </div>
                    <p class="text-nowrap-sm d-inline-block link-white fw-bold mt-lg-5 mt-3">Respect & Responsibility</p>
                    <p>Guiding children to honor themselves, others, community.</p>
                </div>

                <div class="col-6 col-lg-3 dynamic-learning-container">
                    <div class="dynamic-learning-image-wrapper">
                        <img src="{{ asset('img/about/img_core_2.jpg') }}" alt="Family-Centered Integrity" class="img-fluid">
                        <h4 class="dynamic-learning-text mb-0 lh-base" style="border-radius: 0;">
                            Collaboration<br>Integrity<br>Trust
                        </h4>
                    </div>
                    <p class="text-nowrap-sm d-inline-block link-white fw-bold mt-lg-5 mt-3">Family-Centered Integrity</p>
                    <p>Aligning home and school values for stronger families.</p>
                </div>

                <div class="col-6 col-lg-3 dynamic-learning-container">
                    <div class="dynamic-learning-image-wrapper">
                        <img src="{{ asset('img/about/img_core_3.jpg') }}" alt="Inner Growth & Self-Respect" class="img-fluid">
                        <h4 class="dynamic-learning-text mb-0 lh-base" style="border-radius: 0;">
                            Independence<br>Self-Awareness<br>Resilience
                        </h4>
                    </div>
                    <p class="text-nowrap-sm d-inline-block link-white fw-bold mt-lg-5 mt-3">Inner Growth & Self-Respect</p>
                    <p>Nurturing confidence, resilience, and lifelong self-care.</p>
                </div>

                <div class="col-6 col-lg-3 dynamic-learning-container">
                    <div class="dynamic-learning-image-wrapper">
                        <img src="{{ asset('img/about/img_core_4.jpg') }}" alt="Compassion in Action" class="img-fluid">
                        <h4 class="dynamic-learning-text mb-0 lh-base" style="border-radius: 0;">
                            Empathy<br>Community<br>Courage
                        </h4>
                    </div>
                    <p class="text-nowrap-sm d-inline-block link-white fw-bold mt-lg-5 mt-3">Compassion in Action</p>
                    <p>Empowering children to lead with courage and kindness.</p>
                </div>
            </div>
        </div>
    </section>
    
    {{-- Our Journey --}}
    <section class="container" id="our-journey">
        <div class="row section-padding">
            <div class="col-12 col-lg-8 mx-auto text-center">
                <div class="sub-title">OUR JOURNEY</div>
                <h3>Why Kingsman Exists</h3>
                <p class="mb-5">Kingsman was founded to bridge the gap between modern education and timeless values. While today’s systems innovate, they often neglect respect, responsibility, and resilience—qualities that once defined strong communities. We blend the best of both worlds: academic excellence and ethical leadership.</p>
                <img src="{{ asset('img/Generic/KEG_emblem.svg') }}" alt="logo" class="about-logo">
            </div>
        </div>
    </section>
@endsection
