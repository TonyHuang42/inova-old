@extends('layouts.app')

@section('title', $news->title)

@push('styles')
    <style>
        p {
            margin-bottom: 0;
        }

        ol li[data-list="ordered"] {
            list-style-type: decimal;
            list-style-position: inside;
        }

        ol li[data-list="bullet"] {
            list-style: none;
            position: relative;
            padding-left: 1rem;
        }

        ol li[data-list="bullet"]::before {
            content: "•";
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            color: #000;
            font-size: 1rem;
            line-height: 1;
        }
    </style>
@endpush

@section('content')
    <section class="container">
        <div class="row section-padding">
            <div class="col-lg-8 mx-auto">
                @if ($news->is_published == 0)
                    <div class="alert alert-danger text-center" role="alert">
                        This news is not published yet.
                    </div>
                @endif
                <div class="news-detail">
                    <h1 class="banner-text">{{ $news->title }}</h1>
                    <p><strong>Published on:</strong> {{ $news->created_at->format('F j, Y') }}</p>

                    <div class="d-flex justify-content-center">
                        @if ($news->image)
                            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="img-fluid py-5" style="max-height: 500px;">
                        @endif
                    </div>

                    <div class="news-content">
                        {!! $news->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
