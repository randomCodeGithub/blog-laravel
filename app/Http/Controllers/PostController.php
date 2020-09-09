<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showPosts()
    {
        $posts = Post::ByDate()->take(3)->get();
        $popularPosts = Post::byPopularity()->limit(5)->get();
        $postsTops = Post::byCategory('Tops')->limit(6)->get();
        $postsGames = Post::byCategory('Games')->limit(6)->get();

        return view('pages.home', [
            'somePosts' => $posts,
            'popupalPosts' => $popularPosts,
            'postsTops' => $postsTops,
            'postsGames' => $postsGames,
        ]);
    }

    public function postList()
    {
        $newestPost = Post::latest()->first();
        $posts = Post::ByDate()->get();

        return view('pages.blog', [
            'newestPost' => $newestPost,
            'otherPosts' => $posts,
        ]);
    }

    public function postPage($id)
    {
        $post = Post::find($id);
        $post->views = $post->views + 1;
        $post->save();

        $posts = Post::ByDate()->limit(3)->get();

        if ($post == null) {
            return abort(404);
        }

        return view('pages.blog-item', [
            'currentPost' => $post,
            'posts' => $posts,

        ]);
    }
}
