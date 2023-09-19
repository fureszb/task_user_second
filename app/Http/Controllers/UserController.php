<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $user = response()->json(User::all());
        return $user;
    }
    public function show($id)
    {
        $users = response()->json(User::find($id));
        return $users;
    }

    public function listview(){
        $users = User::all(); 
        return view('user.list', ['users' => $users]);
    } 

}