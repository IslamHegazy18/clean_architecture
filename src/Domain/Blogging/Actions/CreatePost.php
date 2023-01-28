<?php

namespace Domain\Blogging\Actions;

use Domain\Blogging\Models\Post;
use Domain\Blogging\ValueObjects\PostValueObject;
use Illuminate\Support\Str;

class CreatePost
{
    public static function handle(PostValueObject $object) //actions due to our value objects ->step 3
    {
        return Post::create(array_merge(
            $object->toArray(),
            [
                'slug' => Str::slug($object->title),
                'user_id' => 1,
            ]
        ));
    }
}
