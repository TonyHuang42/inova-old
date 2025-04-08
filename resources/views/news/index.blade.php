@extends('layouts.app')

@push('styles')
    <style>
        #categoryDropdown {
            width: 202px;
        }
    </style>
@endpush

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
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle d-flex justify-content-between align-items-center" type="button" id="categoryDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <span id="categoryText">ALL NEWS</span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                    <li><a class="dropdown-item news-categories" href="javascript:void(0);" data-category="">ALL NEWS</a></li>

                    @foreach ($categories as $category)
                        <li>
                            <a class="dropdown-item news-categories" href="javascript:void(0);" data-category="{{ $category->id }}">
                                {{ strtoupper($category->name) }}
                            </a>
                        </li>
                    @endforeach
                </ul>
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
                var categoryId = $this.data('category');
                var categoryText = $this.text().trim(); // Get the selected category name

                // Update the button text
                $('#categoryText').text(categoryText || 'ALL NEWS'); // If no category selected, show 'ALL NEWS'

                var url = categoryId ? "{{ route('news.index') }}?category=" + categoryId : "{{ route('news.index') }}";

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
