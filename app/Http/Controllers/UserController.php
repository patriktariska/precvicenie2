<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showAction($id){
        $user = User::find($id);
        return view("user", ['user' => $user]);
    }

    public function insertAction(Request $request){
        $user = new User();
        $user->meno = $request->input('meno');
        $user->priezvisko = $request->input('priezvisko');
        $user->email = $request->input('email'); 
        $user->vek = $request->input('vek');
        $user->heslo = bcrypt($request->input('heslo'));
        $user->save();
        return response()->view("adduser");
    }

    public function updateAction($id){
        $user = User::find($id);
        $user->update(["vek" => $user->vek+10]);
        return redirect()->route('users');
    }

    public function deleteAction($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users');
    }

    public function showAllAction(){
        $users = User::all();
        return view("users", ['users' => $users]);
    }

    public function addUserForm(){
        return view("adduser");
    }
}
