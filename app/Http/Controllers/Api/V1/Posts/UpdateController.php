<?php

namespace App\Http\Controllers\Api\V1\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Posts\UpdateRequest;
use App\Http\Resources\Api\V1\PostResource;
use Domain\Blogging\Actions\UpdatePost;
use Domain\Blogging\Factories\PostFactory;
use Domain\Blogging\Models\Post;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        UpdatePost::handle(
            PostFactory::create(
                $request->validated(),
            ),
            $post
        );

        return response(
            null,
            200,
        );
    }
}
