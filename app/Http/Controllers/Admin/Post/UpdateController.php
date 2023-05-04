<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
    {

        // TODO: Implement __invoke() method.
        $data = $request->validated();
        $post->update($data);

        return view('admin.posts.show', compact('post'));
    }
}
