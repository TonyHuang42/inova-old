<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function store(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'device_id' => 'required|exists:devices,id',
            'content' => 'required|string',
            'images' => 'nullable|array',
            'videos' => 'nullable|string',
            'published_at' => 'required|date',
            'is_visible' => 'boolean',
        ]);

        // Auto-generate the slug based on the title
        $slug = Str::slug($validated['title']);

        // Create the article
        $news = News::create([
            'title' => $validated['title'],
            'slug' => $slug,
            'category_id' => $validated['category_id'],
            'device_id' => $validated['device_id'],
            'content' => $validated['content'],
            'images' => json_encode($request->images),
            'videos' => $validated['videos'],
            'published_at' => $validated['published_at'] ?: now(),
            'is_visible' => $validated['is_visible'] ?? true,
        ]);

        return redirect()->route('news.index');
    }
}
