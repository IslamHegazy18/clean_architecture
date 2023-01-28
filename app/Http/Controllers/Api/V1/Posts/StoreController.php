<?php

namespace App\Http\Controllers\Api\V1\Posts;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\Posts\StoreRequest;
use App\Jobs\Posts\CreatePost as PostsCreatePost;
use Domain\Blogging\Actions\CreatePost;
use Domain\Blogging\Factories\PostFactory;
use Illuminate\Http\Request;
use JustSteveKing\StatusCode\Http;
use App\Jobs\Posts;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) //excute what in actions ->step 4
    {


        $post = CreatePost::handle(
            PostFactory::create(
                $request->validated(),
            ),
        );

        return response()->json(
            $post,
            200,
        );
    }
}
