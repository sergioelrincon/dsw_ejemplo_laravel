<!-- Usamos, como plantilla, la vista layouts.app (/resources/views/layouts/app.blade.php) -->
@extends('layouts.app')                                 

<!-- Inyectamos el texto que contiene el título en el yield "title" -->
@section("title", $viewData["title"])

<!-- Inyectamos el texto con el contenido de la página en el yield "content" -->
@section('content') 

<h1>Listado de Productos</h1>

@foreach ($products as $id => $product)
    <div>
        <a href="{{ route('products.show', ['id' => $id]) }}">
            <img src="{{ asset('img/' . $product['image']) }}" alt="{{ $product['name'] }}">
            <h2>{{ $product['name'] }}</h2>
        </a>
    </div>
@endforeach

@endsection