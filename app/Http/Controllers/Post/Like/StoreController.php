<?php

namespace App\Http\Controllers\Post\Like;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\Like\StoreRequest;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke(Post $post)
    {
        $user = auth()->user();

        /** @var App\Models\User $user */
        $user->likedPosts()->toggle($post->id);

        return redirect()->back();
    }
}
