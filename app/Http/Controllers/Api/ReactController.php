<?php

namespace App\Http\Controllers\Api;

use App\React;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReactController extends Controller
{
    public function index()
    {
        $stars = React::all();
        return response()->json(['data'=>$stars]);
    }

    public function update(Request $request , $id)
    {
        $star = React::findOrFail($id);
        $star->star = $request->star;
        $star->item_id = $request->item_id;
        $star->save();
        return \response()->json($star , 200);
    }
}
