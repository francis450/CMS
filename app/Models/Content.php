<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    /** @use HasFactory<\Database\Factories\ContentFactory> */
    use HasFactory;

    // title, slug, content, type[page, post], status[draft, published], user_id, published_at
    protected $fillable = ['title', 'slug', 'content', 'type', 'status', 'user_id', 'published_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    public function scopeDraft($query)
    {
        return $query->where('status', 'draft');
    }

    public function scopePage($query)
    {
        return $query->where('type', 'page');
    }
}
