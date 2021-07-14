<?php

namespace Tarsicio\Calculadora;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CalculadoraController extends Controller
{
    //
    public function sumar($a, $b){
        $result = $a + $b;
        return view('calculadora::add', compact('result'));
    }

    public function restar($a, $b){
        $result = $a - $b;
        return view('calculadora::restar', compact('result'));
    }
}
