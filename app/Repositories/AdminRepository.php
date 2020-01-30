<?php

namespace App\Repositories;

use App\Item;
use App\User;


class AdminRepository {

    public function getUsers()
    {
        return  User::all();
    }

    public function getItems()
    {
        return  Item::all();
    }

    public function getAdminById($id)
    {
        return User::findOrFail($id);
    }

    public function create($request)
    {
        return $request;
    }


}