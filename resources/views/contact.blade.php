@extends('layouts.app')

@section('content')
    <section class="wave-bg-red section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h1 class="banner-text-sm">CONTACT US</h1>
                    <div class="banner-text">We're Here to Help</div>
                    <p>At Kingsman Education Group, we value communication and are committed to supporting both prospective and current families. Whether you’re exploring enrollment opportunities, need assistance, or have a question, our team is here to assist you every step of the way.</p>
                    <p><a href="{{ url('#inquiry') }}" class="link link-white">Franchise & Partnership Inquiries</a></p>
                    <p class="mb-lg-0"><a href="{{ url('/locations#centers') }}" class="link link-white">Schedule a Tour</a></p>
                </div>
                <div class="col-lg-5 mt-4 mt-lg-0">
                    <img src="{{ asset('img/contact/banner_contact.jpg') }}" alt="img-3" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section id="inquiry">
        <div class="container">
            <div class="row section-padding gy-md-0">
                <div class="col-md-4">
                    <h1 class="banner-text-sm">HEADQUARTER</h1>
                    <p>200 - 3071 No.5 Rd,<br> Richmond, BC, V6X 2T4<br>Canada</p>
                    <p><a href="tel:+17782977108" class="red-text">+1 (778) 297-7108</a></p>
                </div>
                <div class="col-md-8">
                    <h2 class="font-weight-bold">Inquiries</h2>
                    <hr>
                    <p>Have a question or comment that doesn’t fit into the categories above? Feel free to reach out, and we’ll direct your inquiry to the appropriate team.</p>

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="row gy-md-0">
                            <div class="col-md-6">
                                <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-3">
                                <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                            </div>
                            <div class="col-md-6 mt-3">
                                <input type="tel" name="phone" class="form-control" placeholder="Phone Number" required>
                            </div>
                            <div class="col-12 mt-3">
                                <textarea name="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <button type="submit" class="button mt-3">
                            <span class="button-text">SEND MESSAGE </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
