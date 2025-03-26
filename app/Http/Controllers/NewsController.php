<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Carbon\Carbon;

class NewsController extends Controller
{
    // Display  all published news
    public function index(Request $request)
    {
        $category = $request->query('category');
        $query = News::where('is_published', true)->latest();

        if ($category && in_array($category, ['academic', 'community', 'general'])) {
            $query->where('category', $category);
        }

        $news = $query->paginate(5);

        if ($request->ajax()) {
            return view('news.partials.news-list', compact('news'))->render();
        }

        return view('news.index', compact('news'));
    }

    // Show the form for creating a new news article
    public function create()
    {
        return view('news.create');
    }

    public function uploadImage(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpeg,jpg,png,gif,webp,svg|max:5120',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('news/temp', $filename, 'public');

            return response()->json(['url' => asset('storage/' . $path)]);
        }

        return response()->json(['error' => 'No file found'], 400);
    }

    // Store a newly created news article
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:news,title',
            'content' => 'required|string',
            'category' => 'required|in:academic,community,general',
            'is_published' => 'required|boolean',
            'created_at' => 'date',
        ]);

        $content = $this->moveTempImages($request->input('content'));
        $validated['content'] = $content;
        $validated['slug'] = Str::slug($validated['title']);

        News::create($validated);
        return redirect()->route('admin.index')->with('success', 'News article created successfully.');
    }

    // Display a single news article
    public function show($slug)
    {
        $news = News::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        return view('news.show', compact('news'));
    }

    // Show all news for admin (including unpublished news)
    public function adminIndex()
    {
        $news = News::latest()->paginate(10);
        return view('admin.index', compact('news'));
    }

    // Show a single news for admin
    public function adminShow($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();

        return view('news.show', compact('news'));
    }

    function moveTempImages($content)
    {
        $updatedContent = $content;

        preg_match_all('/<img[^>]+src="([^">]+)"/i', $content, $imageMatches);
        $usedTempImages = $imageMatches[1] ?? [];

        $usedFilenames = [];
        foreach ($usedTempImages as $url) {
            if (str_contains($url, '/storage/news/temp/')) {
                $fileName = basename($url);
                $tempPath = 'news/temp/' . $fileName;
                $permanentPath = 'news/images/' . $fileName;

                if (Storage::disk('public')->exists($tempPath)) {
                    Storage::disk('public')->move($tempPath, $permanentPath);
                    $newUrl = asset('storage/news/images/' . $fileName);
                    $updatedContent = str_replace($url, $newUrl, $updatedContent);
                    $usedFilenames[] = $fileName;
                }
            }
        }

        $tempFiles = Storage::disk('public')->files('news/temp');
        foreach ($tempFiles as $file) {
            $fileName = basename($file);
            if (!in_array($fileName, $usedFilenames)) {
                Storage::disk('public')->delete($file);
            }
        }
        return $updatedContent;
    }

    // Show the form for editing a news article
    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    // Update the specified news article
    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:news,title,' . $news->id,
            'content' => 'required|string',
            'category' => 'required|in:academic,community,general',
            'is_published' => 'boolean',
            'created_at' => 'date',
        ]);

        $content = $this->moveTempImages($request->input('content'));
        $validated['content'] = $content;
        $validated['slug'] = Str::slug($validated['title']);

        $news->update($validated);
        return redirect()->route('admin.index')->with('success', 'News article updated successfully.');
    }

    // Delete a news article
    public function destroy(News $news)
    {
        $imageUrls = [];
        preg_match_all('/<img[^>]+src="([^">]+)"/i', $news->content, $matches);
        $imageUrls = $matches[1] ?? [];

        foreach ($imageUrls as $url) {
            $path = str_replace('/storage/', '', parse_url($url, PHP_URL_PATH));
            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            }
        }

        $news->delete();

        return redirect()->route('admin.index')->with('success', 'News article deleted successfully.');
    }

    // Fetch latest 2 published news articles
    public function latestNews()
    {
        $latestNews = News::where('is_published', true)->latest()->take(2)->get();
        return view('partials.latest-news', compact('latestNews'));
    }

    public function deleteEditorImages(Request $request)
    {
        $images = $request->input('images', []);
        $failed = [];

        foreach ($images as $url) {
            $path = str_replace('/storage/', '', parse_url($url, PHP_URL_PATH));
            if (Storage::disk('public')->exists($path)) {
                Storage::disk('public')->delete($path);
            } else {
                $failed[] = $url;
            }
        }

        return response()->json(['success' => count($failed) === 0, 'failed' => $failed]);
    }
}
