<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'content', 'image', 'category_id', 'device_id', 'is_published', 'created_at'];
    const UPDATED_AT = null;

    // Define the relationship with Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function device()
    {
        return $this->belongsTo(Device::class);
    }

    // Automatically generate a slug when creating a news article
    public static function boot()
    {
        parent::boot();

        static::creating(function ($news) {
            $news->slug = Str::slug($news->title);
        });
    }
}
