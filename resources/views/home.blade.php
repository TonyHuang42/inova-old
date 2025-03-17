@extends('layouts.app')

@section('title', 'Home - Kingsman Education Group')
@section('meta_description', 'Kingsman Education Group is a values-driven education provider that nurtures lifelong learners and confident parents. We build respect, responsibility, and empathy—values that shape children and empower caregivers.')
@section('content')
    <section class="home-banner">
        <div class="container position-relative h-100">
            <div class="home-banner-text">
                <h1 class="banner-text-sm">KINGSMAN EDUCATION GROUP</h1>
                <div class="banner-text">Empowering Minds<br> Enriching Hearts</div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row section-padding">
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="welcome-text">
                    <div class="sub-title">WELCOME TO KINGSMAN</div>
                    <h3>Where Families and Values Thrive</h3>
                    <p>At Kingsman, education is a partnership where families and educators collaborate to nurture confident children and empowered parents. Through intentional programs and shared values like respect and empathy, we build environments where children thrive and families grow together.</p>
                    <a href="{{ url('/about-us') }}" class="link">About Us</a>
                </div>
            </div>
            <div class="col-6 col-lg-3 d-flex align-items-center">
                <img src="{{ asset('img/home/img_1.jpg') }}" alt="img-1" class="img-fluid scroll-move-img scroll-move-up">
            </div>
            <div class="col-6 col-lg-3 d-flex align-items-center">
                <img src="{{ asset('img/home/img_2.jpg') }}" alt="img-2" class="img-fluid scroll-move-img">
            </div>
        </div>
    </section>

    {{-- Dynamic Learning Environment --}}
    <section class="wave-bg section-padding">
        <div class="container text-center">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto text-center">
                    <h2>Dynamic Learning Environment</h2>
                    <p class="mb-5">At Kingsman, we blend modern education with timeless values. Our programs nurture children’s minds, hearts, and relationships—because learning thrives when families and educators grow together.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-lg-3 dynamic-learning-container">
                    <div class="dynamic-learning-image-wrapper">
                        <img src="{{ asset('img/home/img_value.png') }}" alt="Values-Driven Education" class="dynamic-learning-img">
                        <div class="dynamic-learning-text">Cultivating responsibility, respect, and empathy daily.</div>
                    </div>
                    <h4 class="link-white dynamic-learning-title pt-lg-5 pt-3">Values-Driven<br>Education</h4>
                </div>

                <div class="col-6 col-lg-3 dynamic-learning-container">
                    <div class="dynamic-learning-image-wrapper">
                        <img src="{{ asset('img/home/img_holistic.png') }}" alt="Holistic Development" class="dynamic-learning-img">
                        <div class="dynamic-learning-text">Nurturing social, emotional, and cognitive growth.</div>
                    </div>
                    <h4 class="link-white dynamic-learning-title pt-lg-5 pt-3">Holistic<br>Development</h4>
                </div>

                <div class="col-6 col-lg-3 dynamic-learning-container mt-5 mt-lg-0">
                    <div class="dynamic-learning-image-wrapper">
                        <img src="{{ asset('img/home/img_parent.png') }}" alt="Parent Partnerships" class="dynamic-learning-img">
                        <div class="dynamic-learning-text">Equipping parents with conflict resolution tools.</div>
                    </div>
                    <h4 class="link-white dynamic-learning-title pt-lg-5 pt-3">Family-Centered<br>Learning</h4>
                </div>

                <div class="col-6 col-lg-3 dynamic-learning-container mt-5 mt-lg-0">
                    <div class="dynamic-learning-image-wrapper">
                        <img src="{{ asset('img/home/img_skill.png') }}" alt="Future-Ready Skills" class="dynamic-learning-img">
                        <div class="dynamic-learning-text">Building creativity, critical thinking and communication.</div>
                    </div>
                    <h4 class="link-white dynamic-learning-title pt-lg-5 pt-3">Future-Ready<br>Skills</h4>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row top-padding custom-bottom-padding">
            <div class="col-6 col-lg-3  d-flex align-items-center order-2 order-lg-1">
                <img src="{{ asset('img/home/img_3.jpg') }}" alt="img-3" class="img-fluid scroll-move-img scroll-move-up">
            </div>
            <div class="col-6 col-lg-3 d-flex align-items-center order-2 order-lg-1">
                <img src="{{ asset('img/home/img_4.jpg') }}" alt="img-4" class="img-fluid scroll-move-img">
            </div>
            <div class="col-lg-6 d-flex align-items-center justify-content-center order-1 order-lg-2">
                <div class="welcome-text">
                    <div class="sub-title">LEARNING</div>
                    <h3>Building strong foundations</h3>
                    <p>Our preschool program nurtures social, emotional, cognitive, and physical growth through play-based exploration, collaborative problem-solving, and guided skill-building. In our safe, values-driven classrooms, children learn to communicate with empathy, think critically, and embrace responsibility.</p>
                    <a href="{{ url('/academics') }}" class="link">OUR APPROACH</a>
                </div>
            </div>
        </div>
    </section>

    <section class="experience-franchise-bg">
        <div class="container text-center">
            <div class="row experience-franchise-container">
                <div class="col-lg-6">
                    <div class="experience-franchise-wrapper">
                        <img src="{{ asset('img/home/img_enrollment.jpg') }}" alt="enrollment" class="experience-franchise-img">
                        <div class="sub-title pt-lg-5 pt-3">EXPERIENCE KINGSMAN</div>
                        <h3>Explore a Center Nearby</h3>
                        <a href="{{ url('/locations') }}" class="link-white">FIND A LOCATION</a>
                    </div>
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="experience-franchise-wrapper">
                        <img src="{{ asset('img/home/img_franchise.jpg') }}" alt="franchise" class="experience-franchise-img">
                        <div class="sub-title pt-lg-5 pt-3">FRANCHISE AND COOPERATIVE</div>
                        <h3>Shape the Future of Education</h3>
                        <a href="{{ url('/franchise') }}" class="link-white">JOIN US</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row section-padding">
            <div class="col-lg-4">
                <div class="welcome-text text-start">
                    <div class="sub-title">STAY CONNECTED</div>
                    <h3 class="mb-4">Latest News</h3>
                    <a href="{{ url('/news') }}" class="link">VIEW ALL</a>
                </div>
            </div>

            <div class="col-lg-8">
                @php
                    $latestNews = \App\Models\News::latest()->take(2)->get();
                @endphp
                @foreach ($latestNews as $news)
                    <div class="row">
                        <div class="col-12">
                            <p class="news-date mb-3">{{ $news->created_at->format('j F, Y') }}</p>
                            <div class="news-box mt-0">
                                <h5 class="news-title">
                                    <a href="{{ route('news.show', $news->slug) }}">{{ $news->title }}</a>
                                </h5>
                                <a href="{{ route('news.show', $news->slug) }}" class="link">READ</a>
                            </div>
                        </div>
                    </div>
                    @if (!$loop->last)
                        <hr style="border-color: #aa182c;">
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
