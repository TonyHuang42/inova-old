@extends('layouts.app')

@section('content')
    <section class="banner news-banner">
        <div class="container position-relative h-100">
            <div class="home-banner-text">
                <h1 class="banner-text-sm">LATEST NEWS</h1>
                <div class="banner-text">Stay informed about the<br> latest news at INOVA</div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row top-padding pb-3">
            <div class="col-12">
                <div class="d-flex gap-4">
                    <a href="javascript:void(0);" class="news-categories active-category" data-category="">ALL NEWS</a>

                    @foreach ($categories as $category)
                        <a href="javascript:void(0);" class="news-categories" data-category="{{ $category->slug }}">
                            {{ strtoupper($category->name) }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <hr>

        <div id="news-list">
            @include('news.partials.news-list', ['news' => $news])
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.news-categories').click(function() {
                var $this = $(this);
                var category = $this.data('category');
                var url = category ? "{{ route('news.index') }}?category=" + category : "{{ route('news.index') }}";

                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {
                        $('#news-list').html(response);
                        $('.news-categories').removeClass('active-category');
                        $this.addClass('active-category');
                    }
                });
            });
        });
    </script>
@endpush
