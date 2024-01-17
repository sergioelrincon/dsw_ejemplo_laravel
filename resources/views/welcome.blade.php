<!-- Usamos, como plantilla, la vista layouts.app (/resources/views/layouts/app.blade.php) -->
@extends('layouts.app')                                 

<!-- Inyectamos el texto que contiene el título en el yield "title" -->
@section('title', 'Página principal - Tienda online')   

<!-- Inyectamos el texto con el contenido de la página en el yield "content" -->
@section('content')                                     
    ¡Hola, mundo!
@endsection