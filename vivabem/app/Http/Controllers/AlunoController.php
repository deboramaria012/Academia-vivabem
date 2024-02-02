<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{

    public function administrador(){
        return view('site.dashboard.administrador.administrador');
    }


    public function aluno(){
        return view('site.dashboard.aluno.aluno');
    }


    public function instrutor(){
        return view('site.dashboard.instrutor.instrutor');
    }

}
