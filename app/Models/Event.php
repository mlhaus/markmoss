<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;
    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'event_date' => 'datetime',
        'published_at' => 'datetime',
    ];
    protected $fillable = ['title', 'content', 'event_date', 'status', 'published_at', 'city_state', 'venue', 'map_url', 'tickets_url', 'feature_image_url'];

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
