@extends('layouts.app')

@section('content')
    <div class="container section-padding-sm">
        <h1>Admin News Management</h1>
        <button><a href="{{ route('news.create') }}">Create News</a></button>
        <!-- News Table -->
        <table class="table">
            <thead>
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
                        <td><a href="{{ route('news.adminShow', $article->slug) }}">{{ $article->title }}</a></td>
                        <td>{{ ucfirst($article->category) }}</td>
                        <td>{{ $article->created_at->format('F j, Y') }}</td>
                        <td>
                            @if ($article->is_published)
                                Yes
                            @else
                                No
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('news.edit', $article->id) }}">Edit</a> |
                            <form action="{{ route('news.destroy', $article->id) }}" method="POST" style="display:inline;" onsubmit="return confirmDeletion('{{ $article->title }}')">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Pagination -->
        {{ $news->links() }}
        <p>Logged in as admin.</p>
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        function confirmDeletion(articleTitle) {
            return confirm('Are you sure you want to delete the article titled "' + articleTitle + '"?');
        }
    </script>
@endpush
