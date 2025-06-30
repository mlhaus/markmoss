<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    use HasFactory;

    // By default, Laravel will look for a table with the same name as the model, but with the s suffix.
    // In this case, it will look for a table called newss.
    // We don't want that since our table is called blog_posts
    protected $table = 'blog_posts';
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'published_at' => 'datetime',
    ];

    protected $fillable = ['title', 'content', 'status', 'published_at', 'feature_image_url'];
    /**
     * Get the user that created the event.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the sanitized event content.
     *
     * @return string
     */
    public function getSanitizedContentAttribute(): string
    {
        return clean($this->attributes['content']);
    }


}
