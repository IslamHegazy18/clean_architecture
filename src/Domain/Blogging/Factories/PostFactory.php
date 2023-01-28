<?php

namespace Domain\Blogging\Factories;

use Domain\Blogging\ValueObjects\PostValueObject;

class PostFactory
{
    public static function create(array $attributes) //data to return  ->step 2
    {
        return new PostValueObject(
            $attributes['title'],
            $attributes['body'],
            $attributes['description'],
        );
    }
}
