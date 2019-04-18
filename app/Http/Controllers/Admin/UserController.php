<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use App\Models\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

	public function show(){
		$roles = Role::all();
		return view('admin.crate-user',compact('roles'));
	}

   public function store(UserRequest $request){

	   $user = User::create([
		   'name' => $request['name'],
		   'email' => $request['email'],
		   'age' => $request['age'],
		   'role_id' => $request['role'],
		   'password' => Hash::make($request['password']),
	   ]);

	   if ($user)
	   		return back()->with('success', $user['name'].' successful created!');
	   else
	   		return back();
   }

   public function destroy($id){
		$user = User::find($id);
		$name = $user['name'];
		$user->delete();
		return back()->with('success',$name . ' has successful deleted !');
   }
}
