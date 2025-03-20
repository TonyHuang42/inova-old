<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    // Display a list of all published news articles, optionally filtered by category
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

    // Store a newly created news article
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:news,title',
            'content' => 'required|string',
            'category' => 'required|in:academic,community,general',
            'is_published' => 'required|boolean',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'created_at' => 'date',
            // 'updated_at' => 'date',
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('news_images', 'public');
        }

        //$validated['is_published'] = $validated['is_published'] ?? true;

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
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'created_at' => 'date',
            // 'updated_at' => 'date',
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        // Handle image update
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            $validated['image'] = $request->file('image')->store('news_images', 'public');
        }

        $news->update($validated);

        return redirect()->route('admin.index')->with('success', 'News article updated successfully.');
    }

    // Delete a news article
    public function destroy(News $news)
    {
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
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
}
