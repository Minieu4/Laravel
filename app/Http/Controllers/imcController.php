<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imcController extends Controller
{
    public function index(Request $req) {
        $peso = $req['peso'];
        $altura = $req['altura'];
        $imc = $peso / ($altura * $altura); 

        $msg='';
        if ($imc <= 18.5) {
            $msg='abaixo do peso';
            return view('calculo', compact('imc', 'msg'));
        } elseif ($imc <= 24.9) {
            $msg='peso normal';
            return view('calculo', compact('imc', 'msg'));
        } elseif ($imc <= 29.9) {
            $msg='sobrepeso';
            return view('calculo', compact('imc', 'msg'));
        } elseif ($imc <= 34.9) {
            $msg='obesidade grau 1';
            return view('calculo', compact('imc', 'msg'));
        } elseif ($imc <= 39.9) { 
            $msg='obesidade grau 2';
            return view('calculo', compact('imc', 'msg'));
        } else { 
            $msg='obesidade grau 3';
            return view('calculo', compact('imc', 'msg'));
        }
        
        }
}
