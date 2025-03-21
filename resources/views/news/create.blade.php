@extends('layouts.app')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    <div class="container section-padding-sm">
        <h1>Create News</h1>
        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
            @if ($errors->any())
                <div>
                    <ul style="color: red;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @csrf
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" placeholder="Title" value="{{ old('title') }}" required style="width: 100%;">
            </div>
            {{-- <div>
                <label for="content">Content</label>
                <textarea name="content" id="content" placeholder="Content" required style="width: 100%; min-height: 20em;">{{ old('content') }}</textarea>
            </div> --}}
            <div>
                <label for="content">Content</label>
                <div id="editor" style="height: 300px;">{!! old('content') !!}</div>
                <input type="hidden" name="content" id="content">
            </div>
            <div>
                <label for="category">Category</label>
                <select name="category" id="category" required>
                    <option value="academic" {{ old('category') == 'academic' ? 'selected' : '' }}>Academic</option>
                    <option value="community" {{ old('category') == 'community' ? 'selected' : '' }}>Community</option>
                    <option value="general" {{ old('category') == 'general' ? 'selected' : '' }}>General</option>
                </select>
            </div>
            <div>
                <label for="is_published">Publish?</label>
                <input type="hidden" name="is_published" value="0">
                <input type="checkbox" name="is_published" id="is_published" {{ old('is_published', true) ? 'checked' : '' }} value="1">
            </div>
            <div>
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
            </div>
            @php
                use Carbon\Carbon;
                $currentDate = Carbon::now('America/Vancouver')->toDateString();
            @endphp

            <div>
                <label for="created_at">Created At</label>
                <input type="date" name="created_at" id="created_at" value="{{ old('created_at', $currentDate) }}">
            </div>

            {{-- <div>
                <label for="updated_at">Updated At</label>
                <input type="date" name="updated_at" id="updated_at" value="{{ old('updated_at', $currentDate) }}">
            </div> --}}
            <button type="submit">Save</button>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.min.js"></script>
    <script>
        const quill = new Quill('#editor', {
            theme: 'snow'
        });
        document.querySelector('form').addEventListener('submit', function() {
            document.getElementById('content').value = quill.root.innerHTML;
        });
    </script>
@endpush
