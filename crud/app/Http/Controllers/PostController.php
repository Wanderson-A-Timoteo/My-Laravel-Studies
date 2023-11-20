<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request)
    {
        $new_post = [
            'title' => 'Meu primeiro post',
            'content' => 'Conteúdo qualquer',
            'author' => 'Wanderson'
        ];

        $posts = new Post($new_post);
        $posts->save();

        dd($posts);
    }
}
