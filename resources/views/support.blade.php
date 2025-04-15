@extends('layouts.app')

@section('title', 'INOVA Support: Warranty, FAQs & Contact | Northlight Phone')
@section('meta_description', 'Need help? INOVA Support offers FAQs, warranty info, shipping details, and quick contact options. Reliable assistance for your Northlight device.')
@push('styles')
    <style>
        :root {
            --bs-border-width: 0;
        }

        .card {
            background-color: #f7f7f7;
        }

        .card-body {
            padding: 30px;
        }

        @media only screen and (max-width: 991px) {
            .row {
                --bs-gutter-y: 24px;
            }
        }
    </style>
@endpush

@section('content')
    <div class="container">
        <div class="section-padding-sm bottom-padding">
            <div class="row">
                <div class="col-xl-8 col-lg-10 mx-auto">
                    <div class="text-center">
                        <h1 class="pb-4">How Can We Help You?</h1>
                        <p class="mb-0">At INOVA, we’re here to ensure your experience is smooth, simple, and supported. Whether you’re curious about our features, need help getting started, or have questions about where to find our products—this page has the answers.</p>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-12 col-lg-5">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <img src="{{ asset('img/support/icons/icons_sales.svg') }}" alt="sales" class="support-icon">
                            <h3 class="card-title">Sales & Enquiries</h3>
                            <p class="card-text">Have questions about our products, availability, or partnership opportunities? We’re happy to help.</p>
                            <div class="mt-auto"><a href="mailto: sales@i-nova.com">sales@i-nova.ca <i class="fa-solid fa-angle-right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 offset-lg-1">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <img src="{{ asset('img/support/icons/icons_support.svg') }}" alt="support" class="support-icon">
                            <h3 class="card-title">General Contact</h3>
                            <p class="card-text">For any general questions, feedback, ideas, or other support-related matters, we’d love to hear from you.</p>
                            <div class="mt-auto"><a href="mailto: support@i-nova.com">support@i-nova.ca <i class="fa-solid fa-angle-right"></i></a></div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-12 col-lg-4">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column">
                            <img src="{{ asset('img/support/icons/icons_warranty.svg') }}" alt="warranty" class="support-icon">
                            <h3 class="card-title">Warranty</h3>
                            <p class="card-text">During the warranty period, we will either repair or replace, at its discretion, any defective product at no charge to the owner.</p><br>
                            <!-- <div class="mt-auto"><a href="register.php">Register Device <i class="fa-solid fa-angle-right"></i></a></div> -->
                            <div class="mt-auto"><a href="mailto: warranty@i-nova.com">warranty@i-nova.ca <i class="fa-solid fa-angle-right"></i></a></div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="black-background">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 mx-auto">
                    <div class="text-center">
                        <h1 class="pb-4">Frequently Asked Questions</h1>
                        <p class="mb-0">Find quick answers to common questions about our products and services. We're committed to providing clear, helpful information to make your experience with INOVA seamless and enjoyable.</p>
                    </div>
                </div>
            </div>

            <div class="row pt-3">
                <div class="col-xl-7 col-lg-8 col-md-9 col-sm-12 mx-auto">
                    <!-- Filter Bar -->
                    <div class="faq-filter">
                        <div class="filter-btn active" data-category="all">All</div>
                        <div class="filter-btn" data-category="products">Products</div>
                        <div class="filter-btn text-nowrap" data-category="order">Order & Shipping</div>
                        <div class="filter-btn me-0" data-category="support">Support</div>
                    </div>
                    <!-- FAQ Questions -->
                    <div class="faq-questions text-start">
                        <div>
                            <div class="faq-item" data-category="products">
                                <div class="question-wrap">
                                    <span class="fa-solid fa-angle-right faq-icon"></span>
                                    <div class="question"> Can I use two SIM cards and a microSD card at the same time?</div>
                                </div>
                                <p class="answer">Yes, Northlight supports dual SIM and a microSD card simultaneously. You don’t have to
                                    sacrifice one for the other.</p>
                            </div>

                            <div class="faq-item" data-category="products">
                                <div class="question-wrap">
                                    <span class="fa-solid fa-angle-right faq-icon"></span>
                                    <div class="question">How do I replace my battery?</div>
                                </div>
                                <p class="answer">Simply remove your phone case and you will see the battery with a slot at the bottom. Lift the
                                    bottom of the battery up and replace it with a new one.</p>
                            </div>

                            <div class="faq-item" data-category="products">
                                <div class="question-wrap">
                                    <span class="fa-solid fa-angle-right faq-icon"></span>
                                    <div class="question">How do I know which SIM card I'm using?</div>
                                </div>
                                <p class="answer">You can check and switch your active SIM through your phone’s SIM settings. Go to Settings
                                    > Network & Internet > SIMs to manage preferences for calls, texts, and data.</p>
                            </div>

                            <div class="faq-item" data-category="products">
                                <div class="question-wrap">
                                    <span class="fa-solid fa-angle-right faq-icon"></span>
                                    <div class="question">How do I manage storage with a microSD card?</div>
                                </div>
                                <p class="answer">Once inserted, your microSD card will appear in your device storage settings. In
                                    the Files app, you can move images, downloads, documents, videos, and audio between internal
                                    and external storage. Note that apps cannot be moved to external storage.</p>
                            </div>

                            <div class="faq-item" data-category="products">
                                <div class="question-wrap">
                                    <span class="fa-solid fa-angle-right faq-icon"></span>
                                    <div class="question">How do I access files saved on my microSD card?</div>
                                </div>
                                <p class="answer">You can access those files by inserting the microSD card back into your phone, or by using a
                                    microSD card reader connected to a laptop, PC, or other devices.</p>
                            </div>

                            <div class="faq-item" data-category="products">
                                <div class="question-wrap">
                                    <span class="fa-solid fa-angle-right faq-icon"></span>
                                    <div class="question">What is the storage capacity?</div>
                                </div>
                                <p class="answer">Northlight comes with 32GB of built-in storage and supports microSD cards up to 512GB for
                                    additional space.</p>
                            </div>

                            <div class="faq-item" data-category="products">
                                <div class="question-wrap">
                                    <span class="fa-solid fa-angle-right faq-icon"></span>
                                    <div class="question">How do I remove or insert my SIM or microSD card?</div>
                                </div>
                                <div class="answer">
                                    <p>Remove the phone case to access the slots at the top-right corner. There are three slots:</p>
                                    <ul>
                                        <li>Nano-SIM (top slot)</li>
                                        <li>Micro-SIM (bottom slot)</li>
                                        <li>MicroSD card (directly above the micro-SIM, stacked vertically)</li>
                                    </ul>
                                    <p>Make sure each card goes in current orientation. </p>
                                </div>
                            </div>

                            <div class="faq-item" data-category="products">
                                <div class="question-wrap">
                                    <span class="fa-solid fa-angle-right faq-icon"></span>
                                    <div class="question">Where can I buy INOVA products?</div>
                                </div>
                                <p class="answer">We’re currently available on the Best Buy Marketplace. You can find us on the Best Buy
                                    website or contact us directly at sales@i-nova.ca for more details. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height: 200px;"></div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Category Filter
        // Get all filter buttons, FAQ items, and toggle answer buttons
        const filterButtons = document.querySelectorAll('.filter-btn');
        const faqItems = document.querySelectorAll('.faq-item');

        // Add event listener to each filter button
        filterButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                // Remove the 'active' class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));

                // Add the 'active' class to the clicked button
                e.target.classList.add('active');

                const category = e.target.getAttribute('data-category');

                // Show/hide FAQ items based on category
                faqItems.forEach(item => {
                    if (category === 'all' || item.getAttribute('data-category') === category) {
                        item.style.display = 'block'; // Show item
                    } else {
                        item.style.display = 'none'; // Hide item
                    }
                });
            });
        });

        // Toggle Answers
        document.querySelectorAll('.question-wrap').forEach(question => {
            question.addEventListener('click', function() {
                const answer = this.nextElementSibling;
                const icon = this.querySelector('.faq-icon');

                if (answer.classList.contains('open')) {
                    answer.style.maxHeight = null;
                    answer.classList.remove('open');
                } else {
                    answer.style.maxHeight = answer.scrollHeight + "px";
                    answer.classList.add('open');
                }

                icon.classList.toggle('open');
            });
        });
    </script>
@endpush
