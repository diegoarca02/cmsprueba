<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Illuminate\Support\Facades\Redirect;

class RegistroController extends Controller
{
    function index(){
        return view('auth.register');
    }

    function store(Request $request){

        $validate = $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required | confirmed',
        ]);

        $user = new User;
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->password=bcrypt($request->get('password'));
        $user->role = 'USUARIO';
        $user->save();

        Session::flash('succes', 'Se registro exitosamente');
        return Redirect::to('');
    }
}
