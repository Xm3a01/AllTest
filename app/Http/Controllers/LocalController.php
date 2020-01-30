<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalController extends Controller
{
    public function index($locale)
    {
        Session::put('locale', $locale);
        return redirect()->back();
    }
}
