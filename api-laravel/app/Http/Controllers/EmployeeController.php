<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function listar(Resquest $request){
        header('Access-Control-Allow-Origin: *');
        $dados = $request->all();
    }
}
