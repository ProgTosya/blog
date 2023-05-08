<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class DestroyController extends BaseController
{
    public function __invoke(Post $post)
    {

        // TODO: Implement __invoke() method.
        $post->delete();

        return redirect()->route('admin.post.index');
    }
}
