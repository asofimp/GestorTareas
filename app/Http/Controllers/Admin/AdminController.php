<?php

//se utiliza para orientar a objetos en general (Organiza y agrupa clases y otros objetos dentro de la estructura jerarquica)
namespace App\Http\Controllers\Admin;

//Esta parte del codigo nos da acceso a los controladores
use Illuminate\Routing\Controller as BaseController;

//clase que extiende los controladores
class AdminController extends BaseController
{
    //metodo
    public function index1(){
        return 'este es un controller 1';
    }
    public function index2(){
        return 'este es un controller 2';
    }
    public function index3(){
        return 'este es un controller 3';
    }
}