<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Post as ModelsPost;
use CodeIgniter\HTTP\ResponseInterface;

class Post extends BaseController
{
    public function index(string $slug)
    {
        $post = new ModelsPost();
        $post = $post->select(
            'posts.id, posts.title, posts.slug, posts.image, posts.description, posts.created_at, users.firstName as userFirstName, users.lastName as userLastName, categories.name as categoryName'
        )->join(
            'users',
            'user_id = users.id'
        )->join(
            'categories',
            'category_id = categories.id'
        )->where(
            'posts.slug',
            $slug
        )->first();

        return view('partials/post', ['post' => $post]);
    }
}
