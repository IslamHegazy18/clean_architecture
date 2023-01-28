<?php

namespace Domain\Blogging\Models\Builders;

use Illuminate\Database\Eloquent\Builder;

class PostBuilder extends Builder
{
    public function published()
    {
        return $this->where('published', true);
    }
    public function draft()
    {
        return $this->where('published', false);
    }
}
