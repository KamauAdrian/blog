<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('users.register');
    }
    public function register(){
        return view('users.register');
    }
    public function create(){
        return view('posts.create');
    }
    public function store(request $request){

$this->validate($request,[
    'name'=>'required',
    'email'=>'reqired|email',
    'password'=>'required|confirmed'
]);
//create new user
        $user=User::create(request(['name','email','password']));
        //redirect to the home page
        return redirect('/');
    }

}
