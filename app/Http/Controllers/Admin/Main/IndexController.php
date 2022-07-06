<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $counts = [];
        $counts['usersCount'] = User::all('id')->count();
        $counts['postsCount'] = Post::all('id')->count();
        $counts['categoriesCount'] = Category::all('id')->count();
        $counts['tagsCount'] = Tag::all('id')->count();

        return view('admin.main.index', compact('counts'));
    }
}
