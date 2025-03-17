@extends('layouts.app')

@section('content')
    <section class="banner franchise-banner">
        <div class="container position-relative h-100">
            <div class="about-banner-text">
                <h1 class="banner-text-sm">FRANCHISE</h1>
                <div class="banner-text">Join the Kingsman Family<br> and Shape the Future</div>
            </div>
        </div>
    </section>

    <section class="container" id="education-philosophy">
        <div class="row section-padding">
            <div class="col-12 col-lg-8 mx-auto text-center">
                <h3 class="red-text mb-2">Kingsman Education Group is expanding to meet the growing demand for high-quality childcare services.</h3>
                <p class="mb-0">By becoming a Kingsman franchise or cooperative partner, you’ll have the opportunity to make a meaningful impact on future generations while building a rewarding business rooted in values-driven education.</p>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row bottom-padding gx-lg-5">
            <div class="col-lg-6 d-flex justify-content-center order-2 order-lg-1">
                <div class="w-100">
                    <h2>Competitive Advantages</h2>
                    <hr>

                    <div class="toggle-container active">
                        <h4 class="mb-0">Family-Centric Approach</h4>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content open">At Kingsman, family values and parental involvement are at the heart of everything we do. This focus sets us apart from other childcare centers, making Kingsman an attractive choice for parents seeking a nurturing and holistic educational environment.</p>
                    <hr>

                    <div class="toggle-container">
                        <h4 class="mb-0">Our Unique Approach</h4>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">Kingsman’s values-driven model emphasizes inner personality growth, helping children develop essential life skills such as emotional management, courage, and a love for learning. This approach ensures students are equipped to thrive in all aspects of life.</p>
                    <hr>

                    <div class="toggle-container">
                        <h4 class="mb-0">Rising Demand for Childcare</h4>
                        <i class="fa-solid fa-angle-right arrow"></i>
                    </div>
                    <p class="toggle-content">With a childcare shortage in Vancouver and surrounding areas, Kingsman is well-positioned to meet this demand. Our high-quality services, combined with a commitment to family engagement, create an impactful and sustainable business opportunity.</p>
                    <hr class="mb-0">
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="{{ asset('img/franchise/img_parent.jpg') }}" alt="Competitive Advantages" class="img-fluid">
            </div>
        </div>
    </section>

    <section class="wave-bg-red" id="guiding-principles">
        <div class="container text-center">
            <div class="row section-padding pb-5">
                <div class="col-12text-center">
                    <h2 class="mb-0">Why Partner with Kingsman?</h2>
                </div>
            </div>

            <div class="row bottom-padding text-center">
                <div class="col-12 col-lg-3 col-md-6">
                    <img src="{{ asset('img/franchise/icon_education.svg') }}" alt="Proven Educational Framework" class="franchise-icon">
                    <h4 class="mt-5">Proven Educational Framework</h4>
                    <p class="mb-lg-0">A values-driven model focused on respect, responsibility, and lifelong growth.</p>
                </div>

                <div class="col-12 col-lg-3 col-md-6">
                    <img src="{{ asset('img/franchise/icon_brand.svg') }}" alt="Established Brand Reputation" class="franchise-icon">
                    <h4 class="mt-5">Established Brand Reputation</h4>
                    <p class="mb-lg-0">Join a trusted name in values-based, family-centered childcare and education.</p>
                </div>

                <div class="col-12 col-lg-3 col-md-6">
                    <img src="{{ asset('img/franchise/icon_icon_support.svg') }}" alt="Comprehensive Support" class="franchise-icon">
                    <h4 class="mt-5">Comprehensive Support</h4>
                    <p class="mb-lg-0">Training, operational guidance, and marketing tools to ensure your success.</p>
                </div>

                <div class="col-12 col-lg-3 col-md-6">
                    <img src="{{ asset('img/franchise/icon_scale_responsibly.svg') }}" alt="Scaling Responsibly" class="franchise-icon">
                    <h4 class="mt-5">Scaling Responsibly</h4>
                    <p class="mb-lg-0">Gain community-driven growth and curriculum innovation through expansion.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row section-padding pb-5">
            <div class="col-12 text-center">
                <h2 class="mb-0">Steps to Partner with Us</h2>
            </div>
        </div>
        <div class="row bottom-padding">
            <div class="col-12 col-lg-4 d-flex">
                <div>
                    <div class="step-container">
                        <span class="step-number">1</span>
                        <span class="step-text">STEP</span>
                    </div>
                </div>
                <div>
                    <h4>Initial Inquiry</h4>
                    <p>Contact us to express your interest, explore partnership opportunities, and learn how Kingsman aligns with your goals.</p>
                </div>
            </div>

            <div class="col-12 col-lg-4 d-flex">
                <div>
                    <div class="step-container">
                        <span class="step-number">2</span>
                        <span class="step-text">STEP</span>
                    </div>
                </div>
                <div>
                    <h4>Information Session</h4>
                    <p>Attend a session to explore the franchise or cooperative models, investment structure, and operational processes.</p>
                </div>
            </div>

            <div class="col-12 col-lg-4 d-flex">
                <div>
                    <div class="step-container">
                        <span class="step-number">3</span>
                        <span class="step-text">STEP</span>
                    </div>
                </div>
                <div>
                    <h4>Application Process</h4>
                    <p>Submit a formal application detailing your vision, qualifications, and alignment with Kingsman’s mission and values.</p>
                </div>
            </div>

            <div class="col-12 col-lg-4 offset-lg-2 mt-lg-5 d-flex">
                <div>
                    <div class="step-container">
                        <span class="step-number">4</span>
                        <span class="step-text">STEP</span>
                    </div>
                </div>
                <div>
                    <h4>Approval and Onboarding</h4>
                    <p>Receive approval and participate in comprehensive training to prepare for your Kingsman location launch.</p>
                </div>
            </div>

            <div class="col-12 col-lg-4 mt-lg-5 d-flex">
                <div>
                    <div class="step-container">
                        <span class="step-number">5</span>
                        <span class="step-text">STEP</span>
                    </div>
                </div>
                <div>
                    <h4>Grand Opening</h4>
                    <p>Celebrate the grand opening of your Kingsman center and begin shaping young minds in your community through values-driven education.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="banner franchise-footer-banner">
        <div class="container position-relative h-100">
            <div class="row about-banner-text">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="sub-title text-white">BECOME A FRANCHISEE</div>
                    <h3>Whether you’re an entrepreneur, investor, or education enthusiast, joining Kingsman means contributing to a brighter future for children and families.</h3>
                    <a href="/contact" class="link-white view-locations mt-5">REQUEST INFO</a>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            // Toggle
            document.querySelectorAll(".toggle-container").forEach((container, index) => {
                const content = container.nextElementSibling;

                if (index === 0) {
                    container.classList.add("active");
                    content.classList.add("open");
                }

                container.addEventListener("click", function() {
                    document.querySelectorAll(".toggle-container").forEach(item => {
                        if (item !== this) {
                            item.classList.remove("active");
                            item.nextElementSibling.classList.remove("open");
                        }
                    });

                    const isActive = this.classList.contains("active");

                    if (isActive) {
                        content.classList.remove("open");
                        this.classList.remove("active");
                    } else {
                        content.classList.add("open");
                        this.classList.add("active");
                    }
                });
            });
        </script>
    @endpush
@endsection
