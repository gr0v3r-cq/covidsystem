<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function index(){
    	$data = User::whereuser_tipe('0')->get();
    	return view('admin.users.index', compact('data'));
    }

    public function edit(User $user){
    	return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id){
    	$user = User::whereId($id)->first();
    	if ($request->state) {
    		$user->state = 1;
    	}
    	else{
    		$user->state = 0;
    	}
    	$user->save();

    	return redirect()->route('admin.users.index');
    }
}
