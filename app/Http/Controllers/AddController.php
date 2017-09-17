<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
class AddController extends Controller





{

use RegistersUsers;
    /**
     * @param array $data
     * @return $this|\Illuminate\Database\Eloquent\Model
     */
	 
	 
  
 
 protected function create(array $data)
    {
        /** @var  $user User */
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            
        ]);

       

        return $user;
	}

 public function index1(Request $request)
    {
 var_dump($request->input('email'), $request->input('name'));
        

 
 }
}