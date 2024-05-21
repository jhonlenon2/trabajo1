<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function listadotest(){
        $variable1=20;
        $variable2=4;

        $multiplicacion = $variable1 * $variable2;

        if($multiplicacion>100){
            return "HOLA ESTE ES UN LISTADO TESTCONTROLLER $multiplicacion";
        }else{
            return "false";
        }
    }
}
