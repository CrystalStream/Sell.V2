<?php

namespace APISELL\Http\Controllers;

use Illuminate\Http\Request;

use APISELL\Http\Requests;
use APISELL\User;
use Redirect;

class UserController extends Controller
{
    public function edit($id){
    	$user = User::find($id);
    	return view('users.user-edit',compact('user'));
    }

    public function update(Request $request, $id){
    	$user = User::find($id);

    	$user->name = $request->name;   
    	if($request->password){
    		$user->password = $request->password;
    	}
    	$user->save();    	
    	return Redirect::to('articles');
    }
}
