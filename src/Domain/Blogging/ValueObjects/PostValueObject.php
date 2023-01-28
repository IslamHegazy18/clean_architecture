<?php

namespace Domain\Blogging\ValueObjects;

class PostValueObject
{
    // columns to create -> step 1
    public function __construct(
        public $title,
        public $body = null,
        public $description = null,
        public $published = false,
    ) {
    }



    public function toArray() // to write it in CreatePost (Action)
    {
        return [
            'title' => $this->title,
            'body' => $this->body,
            'description' => $this->description,
            'published' => $this->published,
        ];
    }
}
