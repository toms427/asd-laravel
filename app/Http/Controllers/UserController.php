<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;


class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::select('name', 'email')->get();
        return view('user', ['users' => $users]);
    }



    protected function store()
    {
		$post = new User;
		$post->name = request('name');
		$post->email = request('email');
		$post->password = bcrypt (request ('password'));
		$post->save();
		return back();
        //dd(request()->all());

    }
	public function destroy(Request $request)
    {
        
    }
	public function edit($id)
    {
		$users=User::select('id','name', 'email')->get();
        return view('edit', ['users' => $users,]);
    }
}