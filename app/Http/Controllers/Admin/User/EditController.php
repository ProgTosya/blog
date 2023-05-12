<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(User $user)
    {
        $roles = User::getRoles();

        // TODO: Implement __invoke() method.

        return view('admin.users.edit', compact('user', 'roles'));
    }
}
