<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\AdminRepository;

class AdminController extends Controller
{
    public $admin;
    
    public function __construct(AdminRepository $admin)
    {
        $this->admin = $admin;
    }

    public function index()
    {
        return view('dashboard.index' , ['products' => $this->admin->getItems() , 'users' => $this->admin->getUsers()]);
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
