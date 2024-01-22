<!-- show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>{{ $product['name'] }}</h1>
    <p>{{ $product['description'] }}</p>
    <p>Precio: ${{ $product['price'] }}</p>
    <img src="{{ asset('img/' . $product['image']) }}" alt="{{ $product['name'] }}">
@endsection