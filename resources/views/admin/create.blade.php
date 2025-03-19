@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Include TinyMCE CDN -->
        <script src="https://cdn.tiny.cloud/1/gxjyvze9x0dlukzvf2s4uioimvshvs37nkv0c536vbo6uuzs/tinymce/5/tinymce.min.js"></script>

        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Title -->
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <!-- Content Editor -->
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" class="form-control"></textarea>
            </div>

            <!-- Image Upload (Multiple) -->
            <div class="form-group">
                <label for="images">Images</label>
                <input type="file" name="images[]" class="form-control" multiple>
            </div>

            <!-- Video URL -->
            <div class="form-group">
                <label for="videos">Video URL</label>
                <input type="text" name="videos" id="videos" class="form-control">
            </div>

            <!-- Other fields (category, device, etc.) -->

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <script>
            tinymce.init({
                selector: '#content', // Target the content textarea
                plugins: 'image media link',
                toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright | image media link',
                images_upload_url: '/upload-image', // Add your image upload URL here
            });
        </script>
    </div>
@endsection
