<!-- Esto es un archivo de vista que extiende el layout -->
@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>Esto se añade a la barra lateral maestra.</p>
@endsection

@section('content')
    <p>Este es mi cuerpo de contenido.</p>
@endsection
