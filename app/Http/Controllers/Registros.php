<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Registros extends Controller
{
    public function index(){
        // alert('Title','Lorem Lorem Lorem', 'success');
        $titulo = "Registro";
        $classCss = "harry";
        return view('registro',compact('titulo','classCss'));
    }
    public function registrar(Request $request){
        $item = new User();
        $item -> name = $request->name;
        $item -> password = Hash::make($request->password);
        if ($item->save()) {
            alert('Registrado','con exito', 'success');
            return redirect()->route('login');
        }else{
            alert('No se Registro','danger');
        }
        }
}
