@extends('layouts.app')

{{-- @push('styles')
    <style>
        #categoryDropdown {
            width: 202px;
        }
    </style>
@endpush --}}

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
            <div class="col-4">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle d-flex justify-content-between align-items-center" type="button" id="categoryDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <span id="categoryText">All News</span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                        <li>
                            <a class="dropdown-item news-categories" href="javascript:void(0);" data-category="">All News</a>
                        </li>
                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item news-categories" href="javascript:void(0);" data-category="{{ $category->id }}">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-4 offset-4">
                <form action="{{ route('news.index') }}" method="GET" class="d-flex">
                    <input type="text" name="search" id="searchInput" class="form-control" placeholder="Search by Title" value="{{ request('search') }}">
                    <button type="submit" class="btn btn-primary ms-2"><i class="fa-solid fa-magnifying-glass"></i></button>
                    <button type="button" id="clearSearch" class="btn btn-secondary ms-2 d-none"><i class="fa-solid fa-xmark"></i></button>
                </form>
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
            const $searchInput = $('#searchInput');
            const $clearBtn = $('#clearSearch');

            // Show/hide clear button on load
            toggleClearButton();

            // Show/hide on input
            $searchInput.on('input', toggleClearButton);

            function toggleClearButton() {
                if ($searchInput.val().trim() !== '') {
                    $clearBtn.removeClass('d-none');
                } else {
                    $clearBtn.addClass('d-none');
                }
            }

            // Clear button functionality
            $clearBtn.on('click', function() {
                $searchInput.val('');
                toggleClearButton();

                const categoryId = $('.news-categories.active-category').data('category') || '';
                fetchNews(categoryId, '');
            });

            // Submit search form
            $('#searchForm').on('submit', function(e) {
                e.preventDefault();
                const keyword = $searchInput.val();
                const categoryId = $('.news-categories.active-category').data('category') || '';
                fetchNews(categoryId, keyword);
            });

            // Category filter
            $('.news-categories').click(function() {
                const $this = $(this);
                const categoryId = $this.data('category');
                const categoryText = $this.text().trim();

                $('#categoryText').text(categoryText || 'All News');
                $('.news-categories').removeClass('active-category');
                $this.addClass('active-category');

                fetchNews(categoryId, $searchInput.val());
            });

            function fetchNews(categoryId, searchKeyword) {
                let url = "{{ route('news.index') }}";
                let params = [];

                if (categoryId) params.push("category=" + categoryId);
                if (searchKeyword) params.push("search=" + encodeURIComponent(searchKeyword));
                if (params.length) url += "?" + params.join("&");

                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {
                        $('#news-list').html(response);
                    }
                });
            }
        });
    </script>
@endpush
