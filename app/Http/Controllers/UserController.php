<?php

//carpeta en la cual se encuentra el archivo
namespace App\Http\Controllers;

//recursos a utilizar
use Illuminate\Http\Request;

class UserController extends Controller{

    //metodo constructor
    public function __construct(){
        //asociamos el middleware
        //$this->middleware('checkage');
        /*De igual manera podemos utilizar un middle solo en una funcion*/ 
        $this->middleware('checkage')->only('index', 'showName');
        //Ademas podemos decir que no se ejecute el middleware con esta funcion
        $this->middleware('checkage')->except('suma');
    }

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
