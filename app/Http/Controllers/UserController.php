<?php

//carpeta en la cual se encuentra el archivo
namespace App\Http\Controllers;

//recursos a utilizar
use Illuminate\Http\Request;

class UserController extends Controller{


    //esta funcion nos demuestra que pueden haber mas de una en una clase
    public function index(){
        return view('welcome');
    }

    //esta funcion recibe como parametro name 
    public function showName($name){
        //devuelve una vista 
        return view('example', ['name'=> $name]);
    }

    public function suma($num=0){
        $b=80;

        return $b + $num;

    }
}
