<?php

namespace App\Http\Controllers;

use App\Character;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    public function index(){
    	$characters=Character::all();
    	return view('characters.index')->with('characters',$characters);
    }
    public function show($id){
    	$character=Character::where('id', $id)->first();
    	return view('characters.show')->with('character',$character);
	}
	public function catchAction(Request $request){
		$user=auth()->user();
		$tmp = $request->get('character_id');
		$user->characters()->sync($tmp);
		return redirect('/users/'.$user->id);
		// dd($user, $tmp);
	}
}
