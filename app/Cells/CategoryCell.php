<?php

namespace App\Cells;

use App\Models\Category;

class CategoryCell 
{
    public function render() {
        $category = new Category();
        $categories = $category->select('categories.name, categories.slug')->findAll();

        return view('partials/cell/category', ['categories'=> $categories]);

    }
}
