@extends('layouts.app')

@section('content')
    <section class="banner academics-banner">
        <div class="container position-relative h-100">
            <div class="about-banner-text">
                <h1 class="banner-text-sm">ACADEMICS</h1>
                <div class="banner-text">Building Foundations for Lifelong Learning</div>
            </div>
        </div>
    </section>

    <section class="wave-bg">
        <div class="container text-center">
            <div class="row section-padding-sm">
                <div class="col-12 col-lg-8 mx-auto">
                    <p>At Kingsman, we believe that education is a journey, and every step matters. Our programs are thoughtfully designed to nurture each child's unique potential, focusing on values, personal growth, and essential life skills. Currently, we offer a dynamic Preschool program with plans to expand into additional educational opportunities in the future.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container" id="education-philosophy">
        <div class="row section-padding bottom-padding-sm">
            <div class="col-12 col-lg-8 mx-auto text-center">
                <div class="sub-title">PRE-SCHOOL</div>
                <h3>Holistic Growth in a Nurturing Environment</h3>
                <p class="mb-0">Our Pre-school program is tailored to support your child’s social, emotional, cognitive, and physical development in a nurturing and engaging environment.</p>
                <div class="vertical-line-wrapper">
                    <div class="vertical-line"></div>
                </div>
                <h2>Curriculum Overview</h2>
                <p class="mb-0">Our innovative curriculum fosters exploration, creativity, and critical thinking through play-based learning. Activities like storytelling, sensory play, and STEM experiments encourage children to ask questions, solve problems, and connect with peers and their environment.</p>
            </div>
        </div>

        <div class="row text-center gy-md-0">
            <div class="col-md-4">
                <img src="{{ asset('img/academic/img_curriculum_1.jpg') }}" alt="Social and Emotional Growth" class="img-fluid">
                <h4 class="mt-md-5 mt-3">Social and Emotional Growth</h4>
                <p class="mb-md-0">Building confidence, empathy, and resilience through collaborative play, guided discussions, team-based challenges, and peer reflection.</p>
            </div>

            <div class="col-md-4">
                <img src="{{ asset('img/academic/img_curriculum_2.jpg') }}" alt="Language and Communication" class="img-fluid">
                <h4 class="mt-md-5 mt-3">Language and Communication</h4>
                <p class="mb-md-0">Encouraging clear self-expression, active listening, and respectful dialogue through role-play, storytelling, and peer feedback sessions.</p>
            </div>

            <div class="col-md-4">
                <img src="{{ asset('img/academic/img_curriculum_3.jpg') }}" alt="Cognitive and Motor Skills" class="img-fluid">
                <h4 class="mt-md-5 mt-3">Cognitive and Motor Skills</h4>
                <p class="mb-md-0">Enhancing problem-solving, logical reasoning, and motor skills through hands-on activities like puzzles, building blocks, and outdoor games.</p>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row section-padding pb-4">
            <div class="col-lg-6 order-2 order-lg-1 d-flex align-items-center">
                <img src="{{ asset('img/academic/img_parent.jpg') }}" alt="Parent Involvement" class="img-fluid">
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-center order-1 order-lg-2">
                <div class="welcome-text">
                    <h2>Parent Involvement</h2>
                    <hr>
                    <p>Weekly reflection emails with activity ideas to reinforce values like respect, responsibility, and empathy through guided home exercises.</p>
                    <hr>
                    <p>Quarterly "Family Learning Days" where parents participate in classroom projects like collaborative science experiments or creative art workshops.</p>
                    <hr class="mb-0">
                </div>
            </div>
        </div>

        <div class="row section-padding">
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="welcome-text">
                    <h2>Community Engagement</h2>
                    <p class="mb-lg-0">We integrate family values and community partnerships into daily learning. Through local volunteer projects, cultural celebrations, and intergenerational activities, children learn respect, responsibility, and the joy of contributing to their community.</p>
                </div>
            </div>
            <div class="col-6 col-lg-3 d-flex align-items-center">
                <img src="{{ asset('img/academic/img_community_1.jpg') }}" alt="img-1" class="img-fluid scroll-move-img scroll-move-up">
            </div>
            <div class="col-6 col-lg-3 d-flex align-items-center">
                <img src="{{ asset('img/academic/img_community_2.jpg') }}" alt="img-2" class="img-fluid scroll-move-img">
            </div>
        </div>
    </section>

    <section class="banner academics-locations-banner">
        <div class="container position-relative h-100">
            <div class="row about-banner-text">
                <div class="col-12 col-lg-8 mx-auto">
                    {{-- <div class="sub-title text-white">LOCATIONS</div> --}}
                    <h3>Each Kingsman center adapts to its community while upholding our core values.</h3>
                    <a href="/locations" class="link-white view-locations mt-5">VIEW LOCATIONS</a>
                </div>
            </div>
        </div>
    </section>
@endsection
