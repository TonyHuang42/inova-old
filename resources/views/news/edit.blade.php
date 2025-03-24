@extends('layouts.app')

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
    <link href="{{ asset('css/quill.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container section-padding-sm">
        <h1>Edit News</h1>
        <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
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
            @method('PUT')
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" value="{{ old('title', $news->title) }}" required style="width: 100%;">
            </div>
            {{-- <div>
                <label for="content">Content</label>
                <textarea name="content" required style="width: 100%; min-height: 20em;">{{ old('content', $news->content) }}</textarea>
            </div> --}}
            <div>
                <label for="content">Content</label>
                <div id="editor" style="min-height: 300px;">{!! old('content', $news->content) !!}</div>
                <input type="hidden" name="content" id="content">
            </div>
            
            <div>
                <label for="category">Category</label>
                <select name="category" required>
                    <option value="academic" {{ old('category', $news->category) == 'academic' ? 'selected' : '' }}>Academic</option>
                    <option value="community" {{ old('category', $news->category) == 'community' ? 'selected' : '' }}>Community</option>
                    <option value="general" {{ old('category', $news->category) == 'general' ? 'selected' : '' }}>General</option>
                </select>
            </div>
            <div>
                <label for="is_published">Publish?</label>
                <input type="hidden" name="is_published" value="0">
                <input type="checkbox" name="is_published" id="is_published" value="1" {{ old('is_published', $news->is_published) ? 'checked' : '' }}>
            </div>
            <div>
                <label for="image">Image</label>
                @if($news->image)
                    <div>
                        <img src="{{ asset('storage/' . $news->image) }}" alt="Current Image" width="150">
                    </div>
                @endif
                <input type="file" name="image">
            </div>
            <div>
                <label for="created_at">Created At</label>
                <input type="date" name="created_at" value="{{ old('created_at', $news->created_at ? $news->created_at->format('Y-m-d') : '') }}">
            </div>
        
            {{-- <div>
                <label for="updated_at">Updated At</label>
                <input type="date" name="updated_at" value="{{ old('updated_at', $news->updated_at ? $news->updated_at->format('Y-m-d') : '') }}">
            </div> --}}
            <button type="submit">Update</button>
            <a href="{{ route('admin.index') }}">Cancel</a>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.min.js"></script>
    <script src="{{ asset('js/quill-editor.js') }}"></script>
@endpush
