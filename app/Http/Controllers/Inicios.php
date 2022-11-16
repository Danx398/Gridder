<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Inicios extends Controller
{
    public function __construct()
    {   
        $this->middleware(['auth','nocache'])->only('index');
    }
    public function index(){
        $titulo = 'Dashboard';
        return view('inicio',compact('titulo'));
    }
}
