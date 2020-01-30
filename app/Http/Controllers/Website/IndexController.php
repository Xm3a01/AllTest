<?php

namespace App\Http\Controllers\Website;

use App\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function index()
    {
        $items = Item::latest()->take(6)->get();
        return view('website.index',compact('items'));
    }
}
