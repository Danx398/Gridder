<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Libros extends Controller
{
    public function anaFrank(){
        $titulo ="Ana Frank - Libro";
        return view('lib/anaFrank',compact('titulo'));
    }
    public function cienAnios(){
        $titulo = "Cien Años - libro";
        return view('lib/cienAnios',compact('titulo'));
    }

}
