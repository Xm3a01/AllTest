<?php

namespace App\Repositories;

use App\Item;
use App\Category;

class IndexRepository  
{

    public function index()
    {
        $items = Item::latest()->take(6)->get();
        $items->load('image');
        return $items;
    }

    public function categories()
    {
        return  Category::all();
    }

    public function sub_categories($id)
    {
        $category = Category::findOrFail($id);
        $category->load('sub_categories');

        return $category->sub_categories;
    }
    
}
