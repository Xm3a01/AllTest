<?php

namespace App\Http\Controllers\Api;

use App\Love;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoveController extends Controller
{
    public function index()
    {
        $loves = Love::all();
        return response()->json(['data'=>$loves]);
    }

    public function update(Request $request , $id)
    {
        $love = Love::findOrFail($id);
        $love->love = $request->love;
        $love->item_id = $request->item_id;
        $love->save();
    }
}
