@foreach ($news as $article)
    <div class="row section-padding-sm">
        <div class="col-lg-4">
            <div class="text-start">
                <div class="sub-title text-uppercase">{{ $article->category }}</div>
                <h3 class="mb-3">
                    <a href="{{ route('news.show', $article->slug) }}" class="text-black">{{ $article->title }}</a>
                </h3>
                <p class="mb-0">{{ $article->created_at->format('j F, Y') }}</p>
            </div>
        </div>

        <div class="col-lg-7 offset-lg-1">
            <p class="pt-lg-40">{!! Str::limit(strip_tags($article->content), 400) !!}</p>
            <div class="text-end">
                <a href="{{ route('news.show', $article->slug) }}" class="link">READ MORE</a>
            </div>
        </div>
    </div>
    <hr class="m-0">
@endforeach

<div class="row">
    <div class="d-flex justify-content-end" style="margin: 32px 0 16px;">
        {{ $news->links() }}
    </div>
</div>
