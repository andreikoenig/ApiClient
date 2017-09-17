<?php

namespace ApiClient\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends ClientController
{
    public function getAllPosts() {
        $posts = $this->fetchAllPosts();

        return view('posts.all-posts', ['posts' => $posts]);
    }

    public function getPostId() {
        return view('posts.input-post');
    }

    public function getAPost(Request $request) {
        $this->validate($request,['postId' => 'required|numeric']);

        $postId = $request->get('postId');
        $post = $this->fetchAPost($postId);

        return view('posts.single-post', ['post' => $post]);
    }
}
