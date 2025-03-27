@extends('layouts.app')

@section('content')
    <div class="container section-padding-sm py-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Admin News Management</h1>
            <a href="{{ route('news.create') }}" class="btn btn-primary">Create News</a>
        </div>

        <!-- News Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Created At</th>
                        <th>Published</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $article)
                        <tr>
                            <td>
                                <a href="{{ route('news.adminShow', $article->slug) }}" class="text-decoration-none">
                                    {{ $article->title }}
                                </a>
                            </td>
                            <td>{{ ucfirst($article->category) }}</td>
                            <td>{{ $article->created_at->format('F j, Y') }}</td>
                            <td>
                                <span class="badge {{ $article->is_published ? 'bg-success' : 'bg-danger' }}">
                                    {{ $article->is_published ? 'Yes' : 'No' }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('news.edit', $article->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('news.destroy', $article->id) }}" method="POST" 
                                    class="d-inline" 
                                    onsubmit="return confirmDeletion('{{ $article->title }}')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center">
            {{ $news->links('pagination::bootstrap-5') }}
        </div>

        <!-- Logout Section -->
        <div class="mt-4 d-flex justify-content-between align-items-center">
            <p class="mb-0">Logged in as <strong>Admin</strong></p>
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-danger">Logout</button>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function confirmDeletion(articleTitle) {
            return confirm('Are you sure you want to delete the article titled "' + articleTitle + '"?');
        }
    </script>
@endpush
