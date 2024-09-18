<?php

namespace App\Cells;

use App\Models\Category;

class CategorySidebar
{
    public function render( ) {
      return view("partials/cell/sidebar");
    }
}
