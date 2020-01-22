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


}