<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index(Request $request){
		return view('user.index');
	}

    public function searchUser(Request $request){

        $userCount = User::where('role_id','<>',1)->where('id','<>',auth()->id())->count();
        if($request['search']){

            $val = $request['search'];
            $users =  User::where('role_id','<>', 1)
                ->where('id','<>',auth()->id())
                ->where(function($q)  use ($val){
                    $q->where('name', 'LIKE', '%' . $val . '%');
                    $q->orWhere('email', 'LIKE', '%' . $val . '%');
                    $q->orWhere('age', 'LIKE', '%' . $val . '%');
                    $q->orWhere('created_at', 'LIKE', '%' . $val . '%');
                })
                ->get();

            $userCount = count($users);

        }

        elseif($request['name'] && $request['order'])
            $users = User::where('role_id','<>',1)
                ->orderBy("{$request['name']}","{$request['order']}")
                ->where('id','<>',auth()->id())
                ->limit($request['limit'])
                ->offset($request['offset'])
                ->get();
        else
            $users = User::where('role_id','<>',1)
                ->where('id','<>',auth()->id())
                ->limit($request['limit'])
                ->offset($request['offset'])
                ->get();

        return response()->json(['data'=> $users, 'recordsFiltered' => $userCount, 'recordsTotal' => $userCount]);
    }
}
