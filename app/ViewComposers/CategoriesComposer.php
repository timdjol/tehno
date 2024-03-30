<?php

namespace App\ViewComposers;

use App\Models\Category;
use Illuminate\View\View;

class CategoriesComposer
{
    public function compose(View $view){
        $categories = Category::where('parent_id', 1)->get();
        $view->with('categories', $categories);
    }
}