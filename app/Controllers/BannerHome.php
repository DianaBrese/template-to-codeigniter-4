<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Post;

class BannerHome extends BaseController
{
    public function index()
    {
        helper('text');

        $post = new Post();
        $recents = $post->select('posts.title, posts.description, posts.image, posts.slug, '
        )->join(
            'users',
            'users.id = posts.user_id'
        ) -> join(
            'categories',
            'categories.id = posts.category_id'
        )->orderBy('posts.id', 'desc')->findAll(4);

        return view('_partials/_bannerHome', ['recents'=> $recents]);
    }
}
