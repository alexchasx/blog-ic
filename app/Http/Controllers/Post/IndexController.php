<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use InvalidArgumentException;
use Illuminate\Support\Facades\Log;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(6);

        $randomPosts = [];        
        try {
            $randomPosts = Post::get()->random(4);
        } catch (InvalidArgumentException $e) {
            Log::notice([
                'File: ' . __FILE__,
                'Line: ' . __LINE__,
                'Code: ' . $e->getCode(),
                'Message: ' . $e->getMessage(),
            ]);
        }

        // Вывод популярных постов
        $likedPosts = Post::withCount('likedUsers')
            ->orderBy('liked_users_count', 'DESC')
            ->get()
            ->take(4);

        return view('post.index', compact('posts', 'randomPosts', 'likedPosts'));
    }
}
