@extends('layouts.app')
@section('title', 'Información de productos')
@section('subtitle', 'Información de productos')
@section('content')
    <div class="row">
        <div class="col-md-4 col-lg-3 mb-2">
            <img src="{{ $product['url'] }}" class="img-fluid rounded">
        </div>
        <div class="col-md-4 col-lg-3 mb-2 text-start">
            <h1>
                {{ $product['nombre'] }} (${{ $product['precio'] }})
            </h1>
            <p>
                {{ $product['descripción'] }}
            </p>
            <p>
                Add to card
            </p>
        </div>
    </div>
@endsection
