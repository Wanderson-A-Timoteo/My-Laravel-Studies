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

        // Forma convencional de criar um registro no banco
        // $posts = new Post($new_post);
        // $posts->save();

        // Outra forma de criar um registro no banco
        $posts = new Post();
        $posts->title = 'Meu segundo post';
        $posts->content = 'Conteúdo do segundo post';
        $posts->author = 'Timóteo';
        $posts->save();

        dd($posts);
    }
}
