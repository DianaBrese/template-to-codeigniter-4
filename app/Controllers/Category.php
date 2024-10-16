<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category as ModelsCAtegory;
use App\Models\Post;

class Category extends BaseController
{
    public function index(string $slug)
    {
        helper('text');
        
        $category = new ModelsCategory();
        $category = $category->select('categories.id')->where('slug', $slug)->first();
       
        $post = new Post();
        $post->select(
            'posts.id, posts.image, ,posts.title, posts.created_at, posts.slug, posts.description, categories.name as categoryName, users.firstName as userFirstName, users.lastName as userLastName, users.image as userImage'
        )->join(
            'users',
            'users.id = posts.user_id '
        )->join(
            'categories',
            'categories.id = posts.category_id'
        )->where(
            'posts.category_id',
            $category->id
        );

        
        return view('category', ['posts'=>$post->paginate(5), 'pager' =>$post->pager]);
    }
}
