<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasSEO;

    protected $guarded = [];

    protected $casts = [
        'published' => 'boolean',
    ];

    public function getDynamicSEOData(): SEOData
    {
        return new SEOData(
            title:env('APP_NAME') . ' - ' . $this->title,
            description:null,
            author:$this->user->name,
            image:$this->getFirstMediaUrl('covers'),
            url:url('post/' . $this->slug)
        );
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug($value);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('covers');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}