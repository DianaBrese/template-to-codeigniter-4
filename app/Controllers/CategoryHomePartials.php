<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Post;

class CategoryHomePartials extends BaseController
{
    private array $categories = [
        'culture' => 1,
        'business' => 2,
        'lifestyle' => 3
    ];
    public function index(string $category)
    {

        helper('text');

        if (!array_key_exists($category, $this->categories)) {
            $categoryId = 1;
        } else {
            $categoryId = $this->categories[$category];
        };

        $post = new Post();
        $posts = $post->select(
            'posts.title, posts.image, posts.description, posts.slug, posts.created_at, users.firstName as userFirstName, users.lastName as userLastName, users.image as userImage,  categories.name as categoryName, category_id'
        )->where('category_id', $categoryId)
            ->join(
                'users',
                'users.id = posts.user_id'
            )
            ->join(
                'categories',
                'categories.id = posts.category_id'
            )->findAll(10);

        return view('_partials/_category', ['posts' => $posts]);
    }
}
