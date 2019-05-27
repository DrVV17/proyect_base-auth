<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class AppController extends Controller
{
	public function getAdminPage()
	{
		$users = User::all();
		return view('config',['users'=>$users]);
	}

	public function postAdminAssingRoles(Request $request){

		$user = User::where('email', $request['email'])->first();
		$user->roles()->detach();
		
		if ($request['role_user']){
			$user->roles()->attach(Role::where('name','User')->first());
		}
		if ($request['role_author']){
			$user->roles()->attach(Role::where('name','Author')->first());
		}
		if ($request['role_admin']){
			$user->roles()->attach(Role::where('name','Admin')->first());
		}
		return redirect()->back();
	}
}