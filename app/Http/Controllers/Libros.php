<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Libros extends Controller
{
    public function anaFrank(){
        $titulo ="Ana Frank - Libro";
        $classCss = "fondoAnaF";
        return view('lib/anaFrank',compact('titulo'));
    }
    public function cienAnios(){
        $titulo = "Cien Años - libro";
        $classCss = "fondoCienA";
        return view('lib/cienAnios',compact('titulo'));
    }

}
