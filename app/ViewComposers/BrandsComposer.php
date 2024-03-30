<?php

namespace App\ViewComposers;

use App\Models\Brand;
use Illuminate\View\View;

class BrandsComposer
{
    public function compose(View $view){
        $brands = Brand::get();
        $view->with('brands', $brands);
    }
}