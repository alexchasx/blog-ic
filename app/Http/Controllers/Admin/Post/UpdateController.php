<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $tagIds = $data['tag_ids'];
        unset($data['tag_ids']);

        dd($request->all());

        $data['preview_image'] = $request->file('preview_image')
            ->store('uploads', 'public');
        $data['main_image'] = $request->file('main_image')
            ->store('uploads', 'public');

        $post->update($data);
        $post->tags()->sync($tagIds);


        return view('admin.post.show', compact('post'));
    }
}
