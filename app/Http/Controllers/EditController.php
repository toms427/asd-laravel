<?php

namespace App\Http\Controllers;
use App\User;
class EditController extends Controller
{
    public function index()
    {
        $users=User::select('id','name', 'email')->get();
        return view('edit',['users'=>$users]);

    }
}
