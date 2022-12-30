<?php

namespace App\Http\Controllers\Authenticated\User\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts\Post;
class PostsController extends Controller
{
    public function show(Request $request){
        $posts = Post::all();
        return view('authenticated.user.post.posts');
    }
}
