<?php

namespace App\Http\Controllers\dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\AdminRepository;

class AdminController extends Controller
{
    public $admin;
    
    public function __construct(AdminRepository $admin)
    {
        $this->admin = $admin;
    }

    public function firstPage()
    {
       return view('dashboard.index' , ['products' => $this->admin->getItems() , 'users' => $this->admin->getUsers()]);
    }

    public function index()
    {
       return view('dashboard.users.index' , ['users' => $this->admin->getUsers()]);
    }

    public function store(Request $request)
    {
       return $this->admin->create($request);
    }

    public function edit($id)
    {
       return view('dashboard.users.edit' , ['user' => $this->admin->getAdminById($id)]);
    }

    public function update(Request $request , $id)
    {
       return view('dashboard.users.index' , ['users' => $this->admin->getUsers()]);
    }

    public function destroy()
    {
       return view('dashboard.users.index' , ['users' => $this->admin->getUsers()]);
    }



    // public function comper(Request $request)
    // {

    //     // return $request->data_f2;
    //     $d1 = date('Y-m-d');
    //     $d2 = $request->data_f2;

    //     if( $d1 == $d2) {
    //         return 'true';
    //     } else {
    //         return 'false';
    //     }

    // }
}
