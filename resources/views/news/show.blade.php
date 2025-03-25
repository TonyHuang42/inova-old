@extends('layouts.app')

@section('title', $news->title)

@push('styles')
    <link href="{{ asset('css/news.css') }}" rel="stylesheet">
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
