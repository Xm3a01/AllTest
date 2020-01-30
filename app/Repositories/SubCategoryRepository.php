<?php

namespace App\Repositories;

use App\Category;
use App\SubCategory;
use App\Traits\Message;

class SubCategoryRepository
{
    use Message;


    public function all()
    {
        return SubCategory::all();
    }

    public function categories()
    {
        return Category::all();
    }

    public function getById($id)
    {
        return SubCategory::findOrFail($id);
    }

    public function add($request)
    {
        SubCategory::create([
            'ar_name'     => $request->ar_name,
            'name'        => $request->name,
            'category_id' => $request->category_id
        ]);

        $this->successMessage('تم الحفظ بنجاح');
        return redirect()->route('subcategories.index');
    }


    public function update($request , $id)
    {
        $subcategory = $this->getById($id);

        if($request->has('name')){$subcategory->name = $request->name;}
        if($request->has('ar_name')){$subcategory->ar_name = $request->ar_name;}
        if($request->has('category_id')){$subcategory->category_id = $request->category_id;}


        if($subcategory->save()) {
            $this->successMessage('تم التعديل بنجاح');
            return redirect()->route('subcategories.index');
        }
    }

    public function delete($id)
    {
        $subcategory = $this->getById($id);
        if($subcategory->delete()){
            $this->successMessage('تم الحذف بنجاح');
            return redirect()->route('subcategories.index');
        }
    }
}