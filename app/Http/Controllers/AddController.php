<?php

namespace App\Http\Controllers;

use App\Models\Auth\User\User;
use Illuminate\Http\Request;

class AddController extends Controller

{


    /**
     * @param array $data
     * @return $this|\Illuminate\Database\Eloquent\Model
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    public function index()
    {

        return view('add');

    }
}