@extends('layouts.app')

@push('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    <link href="{{ asset('css/quill.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container section-padding-sm">
        <h1>Edit News</h1>
        <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @include('news.partials.form', ['news' => $news])
            <div>
                <label for="created_at">Created At</label>
                <input type="date" name="created_at" value="{{ old('created_at', $news->created_at ? $news->created_at->format('Y-m-d') : '') }}">
            </div>
            <button type="submit">Update</button>
            <a href="{{ route('admin.index') }}">Cancel</a>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.min.js"></script>
    <script src="{{ asset('js/quill-editor.js') }}"></script>
@endpush
