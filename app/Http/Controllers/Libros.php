<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Libros extends Controller
{
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
    public function emma(){
        $titulo = "Emma - libro";
        $classCss = "fondoEmma";
        return view('lib/jane',compact('titulo','classCss'));
    }
    public function charlotte(){
        $titulo = " Jane Eyre- libro";
        $classCss = "fondoCharlotte";
        return view('lib/charlotte',compact('titulo','classCss'));
    }
    public function fierecilla(){
        $titulo = " fierecilla domada - libro";
        $classCss = "fondoFierecilla";
        return view('lib/fierecilla',compact('titulo','classCss'));
    }
    public function animals(){
        $titulo = " Enciclopedia de animales - libro";
        $classCss = "fondoEnciclopedia";
        return view('lib/animals',compact('titulo','classCss'));
    }
    public function manual(){
        $titulo = " Manual de animales - libro";
        $classCss = "fondoManual";
        return view('lib/manual',compact('titulo','classCss'));
    }
    
}
