<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class DestroyController extends Controller
{
    public function __invoke(Tag $tag)
    {

        // TODO: Implement __invoke() method.
        $tag->delete();

        return redirect()->route('admin.tag.index');
    }
}
