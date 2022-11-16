<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Libros extends Controller
{
    public function anaFrank(){
        $titulo ="Ana Frank - Libro";
        return view('lib/anaFrank',compact('titulo'));
    }

}
