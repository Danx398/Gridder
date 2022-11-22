<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Libros extends Controller
{
    public function fondo(){
        
    }
    public function anaFrank(){
        $titulo ="Ana Frank - Libro";
        $classCss = "fondoAnaF";
        return view('lib/anaFrank',compact('titulo','classCss'));
    }
    public function cienAnios(){
        $titulo = "Cien Años - libro";
        $classCss = "fondoCienA";
        return view('lib/cienAnios',compact('titulo','classCss'));
    }
    public function teAmo(){
        $titulo = "Posdata Te amo - libro";
        $classCss = "fondoTamo";
        return view('lib/pdTamo',compact('titulo','classCss'));
    }

}
