<?php

namespace Domain\Blogging\Models;

use Domain\Blogging\Models\Builders\PostBuilder;
use Domain\Shared\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use JustSteveKing\KeyFactory\Models\Concerns\HasKey;
use Domain\Shared\Models\Concerns\HasSlug;

class Post extends Model
{
    use SoftDeletes, HasKey, HasFactory, HasSlug;

    protected $fillable = [
        'key',
        'title',
        'slug',
        'body',
        'description',
        'published',
        'user_id',
    ];

    protected $casts = [
        'published' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function newEloquentBuilder($query)
    {
        return new PostBuilder($query);

    }
}
