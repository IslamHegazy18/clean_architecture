<?php

namespace App\Http\Controllers\Api\V1\Posts;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\PostResource;
use Domain\Blogging\Models\Post;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Http;
use Spatie\QueryBuilder\QueryBuilder;
use JustSteveKing\StatusCode\Http;

class IndexController extends Controller
{
    public function __invoke(Request $request)
    {

        $posts = QueryBuilder::for(
            Post::class,
        )->allowedIncludes( // ?include=x,y,z    ->relations
            ['user']
        )->published()->paginate(5);


        return response()->json([
            PostResource::collection(
                $posts
            ),
            Http::OK,
        ]);
    }
}
