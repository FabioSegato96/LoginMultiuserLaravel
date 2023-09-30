<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartamentoControlador extends Controller
{
    public function index(){

        if (Auth::check()){
            $user = Auth::user();
        } else {
            $user = "Não está logado.";
        }

        return view ('departamentos', compact('user'));
    }
}
