<?php

namespace App\Cells;

use App\Models\Category;

class CategoryMenu
{
    public function render( string $view) {
        $category = new Category();
        $categories = $category->select('categories.name, categories.slug')->findAll();

      
        return view("partials/cell/{$view}", ['categories'=> $categories]);

    }
}
