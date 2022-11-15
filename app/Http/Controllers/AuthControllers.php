<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthControllers extends Controller
{
    public function index(){
        $titulo = "Login";
        return Auth::check() ? redirect()->route('inicio') : view('login',compact('titulo'));
    }
    public function logear(Request $request){
        $credenciales = $request->only('name','password');
        //dd(Auth::user()->name);
        //alert($request->name,'Bienvenido','success');
        toast('Bienvenid@ '.$request->name,'success');
        return Auth::attempt($credenciales) ? redirect()->route('inicio') : back()->withInput($credenciales);
    }
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('login');
    }
}
