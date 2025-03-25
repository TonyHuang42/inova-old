@extends('layouts.app')

@push('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    <link href="{{ asset('css/quill.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container section-padding-sm">
        <h1>Create News</h1>
        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
            @include('news.partials.form')

            @php
                use Carbon\Carbon;
                $currentDate = Carbon::now('America/Vancouver')->toDateString();
            @endphp

            <div>
                <label for="created_at">Created At</label>
                <input type="date" name="created_at" id="created_at" value="{{ $currentDate }}">
            </div>

            <button type="submit">Save</button>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.min.js"></script>
    <script src="{{ asset('js/quill-editor.js') }}"></script>
@endpush
