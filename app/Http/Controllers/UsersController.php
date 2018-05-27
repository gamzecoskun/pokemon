<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
     public function index(){
    	$users=User::all();
    	return view('users.index')->with('users',$users);
    }
    public function show($id){
    	$user=User::where('id', $id)->first();
    	return view('users.show')->with('user',$user);
	}
}
