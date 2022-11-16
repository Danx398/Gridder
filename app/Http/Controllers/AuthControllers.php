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
        /* dd($credenciales);
        dd(back()->withInput($credenciales)); */
        if (Auth::attempt($credenciales)) {
            toast('Bienvenid@ '.$request->name,'success'); 
            return redirect()->route('inicio');
        }else{
            alert()->error('Error de sesion','Verifica tus credenciales');
            return back()->withInput($credenciales);
        }
        //return Auth::attempt($credenciales) ? redirect()->route('inicio') : back()->withInput($credenciales);
    }
    public function logout(){
        Auth::logout();
        Session::flush();
        toast('Gracias por su visita','success'); 
        return redirect()->route('login');
    }
}
