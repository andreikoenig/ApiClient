<?php

namespace ApiClient\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends ClientController
{
    public function getAllPosts() {
        $posts = $this->fetchAllPosts();

        return view('posts.all-posts', ['posts' => $posts]);
    }

}
