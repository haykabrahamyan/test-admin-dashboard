<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
   public function index(){
   		$users = User::where('role_id','<>',1)->paginate(10);
   		return view('admin.dashboard',compact('users'));
   }

   public function roleAction(){
   		$roles = Role::all();
   		return view('admin.role',compact('roles'));
   }
}
