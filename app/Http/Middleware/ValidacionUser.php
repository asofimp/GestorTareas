<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidacionUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

     //creacion de una clase la cual validara la edad del usuario
     //recibimos el valor por parametro el cual estara en el $maxEdad
    public function handle(Request $request, Closure $next, $maxEdad): Response
    {
        //aqui estamos validando que la edad sea mayor de 15 y menor que el parametro que en este caso es 80
        if($request-> age > 15 && $request->age < $maxEdad ){
            return redirect('/nombre/alberto');
        }
        return $next($request);
    }
}
