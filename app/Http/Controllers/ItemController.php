<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;
use App\Repositories\ItemRepository;

class ItemController extends Controller
{
    //*************** THIS GOOD ********************/

    public $itemRepository;

    public function __construct(ItemRepository $itemRepository)
    {
        $this->itemRepository = $itemRepository;
    }


    public function index()
    {
        return view('dashboard.products.index',['items' => $this->itemRepository->getItems()]);      
    }

    public function store(ItemRequest $request)
    {
        return $this->itemRepository->addItem($request);
        
    }

    public function edit($id)
    {
        return view('dashboard.products.edit' , ['item' => $this->itemRepository->getItemById($id)]);
    }

    public function update(ItemRequest $request , $id)
    {
        return $this->itemRepository->update($request , $id);
    }

    public function destroy($id)
    {
        return $this->itemRepository->delete($id);
    }
}
