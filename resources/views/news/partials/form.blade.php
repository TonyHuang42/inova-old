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
    <input type="text" name="title" id="title" placeholder="Title" value="{{ old('title', $news->title ?? '') }}" required style="width: 100%;">
</div>

<div>
    <label for="content">Content</label>
    <div id="editor" style="min-height: 300px;">{!! old('content', $news->content ?? '') !!}</div>
    <input type="hidden" name="content" id="content" required>
</div>

<div>
    <label for="category">Category</label>
    <select name="category" id="category" required>
        <option value="academic" {{ old('category', $news->category ?? '') == 'academic' ? 'selected' : '' }}>Academic</option>
        <option value="community" {{ old('category', $news->category ?? '') == 'community' ? 'selected' : '' }}>Community</option>
        <option value="general" {{ old('category', $news->category ?? '') == 'general' ? 'selected' : '' }}>General</option>
    </select>
</div>

<div>
    <label for="is_published">Publish?</label>
    <input type="hidden" name="is_published" value="0">
    <input type="checkbox" name="is_published" id="is_published" value="1" {{ old('is_published', $news->is_published ?? true) ? 'checked' : '' }}>
</div>

<!-- Hidden file input for image upload -->
<input type="file" id="uploadImage" style="display: none;" accept="image/*">
