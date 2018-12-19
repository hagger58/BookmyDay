<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Category;
use App\Sub_Category;

class DataComposer
{
    /**
     * Create a movie composer.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $categories1 = Category::where('id', '=', '1')->get();
        $categories2 = Category::where('id', '=', '2')->get();
        $categories3 = Category::where('id', '=', '3')->get();
        $categories4 = Category::where('id', '=', '4')->get();
        $categories5 = Category::where('id', '=', '5')->get();
        $categories6 = Category::where('id', '=', '6')->get();
        $categories7 = Category::where('id', '=', '7')->get();
        $subcategories1 = Sub_Category::where('category_id', '=', '1')->get();
        $subcategories2 = Sub_Category::where('category_id', '=', '2')->get();
        $subcategories3 = Sub_Category::where('category_id', '=', '3')->get();
        $subcategories4 = Sub_Category::where('category_id', '=', '4')->get();
        $subcategories5 = Sub_Category::where('category_id', '=', '5')->get();
        $subcategories6 = Sub_Category::where('category_id', '=', '6')->get();
        $subcategories7 = Sub_Category::where('category_id', '=', '7')->get();
        
        $view->withCategories1($categories1)
        ->withCategories2($categories2)
        ->withCategories3($categories3)
        ->withCategories4($categories4)
        ->withCategories5($categories5)
        ->withCategories6($categories6)
        ->withCategories7($categories7)
        ->withSubcategories1($subcategories1)
        ->withSubcategories2($subcategories2)
        ->withSubcategories3($subcategories3)
        ->withSubcategories4($subcategories4)
        ->withSubcategories5($subcategories5)
        ->withSubcategories6($subcategories6)
        ->withSubcategories7($subcategories7);
       
    }
}


        