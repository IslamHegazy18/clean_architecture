<?php

namespace App\Http\Controllers\Api\V1\Posts;

use App\Http\Controllers\Controller;
use Domain\Blogging\Models\Post;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Request $request, Post $post)
    {
        $post->delete();

        return response(
            null,
            200,
        );
    }
}
