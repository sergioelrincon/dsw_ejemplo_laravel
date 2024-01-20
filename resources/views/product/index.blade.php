@extends('layouts.app')
@section('title', 'Productos disponibles')
@section('subtitle', 'Productos disponibles')
@section('content')
    <div class="row">
        @foreach ($products as $key => $product)
            <div class="col-md-4 col-lg-3 mb-2">
                <img src="{{ $product['url'] }}" class="img-fluid rounded">
                <br />
                <a class="btn btn-primary mt-2" href="{{ route('product.show', ['id' => $key]) }}">
					{{ $product['nombre'] }}
				</a>
            </div>
        @endforeach
    </div>
@endsection
