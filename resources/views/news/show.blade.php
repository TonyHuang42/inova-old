@extends('layouts.app')

@section('content')
    <section class="container">
        <div class="row section-padding">
            <div class="col-lg-8 mx-auto">
                <div class="news-detail">
                    <h1 class="banner-text">{{ $news->title }}</h1>
                    <p><strong>Published on:</strong> {{ $news->created_at->format('F j, Y') }}</p>
                
                    <div class="d-flex justify-content-center">
                        @if($news->image)
                            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="img-fluid py-5">
                        @endif
                    </div>
                
                    <div class="news-content">
                        <p>{!! nl2br(e($news->content)) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
