<?php

namespace Domain\Blogging\Actions;

use Domain\Blogging\Models\Post;
use Domain\Blogging\ValueObjects\PostValueObject;
use Illuminate\Support\Str;

class UpdatePost
{
    public static function handle(PostValueObject $object,Post $post) //actions due to our value objects ->step 3
    {
        return $post->update($object->toArray());
    }
}
