@extends('layouts.app')
@section('title', 'Información de productos')
@section('subtitle', 'Información de productos')
@section('content')
    <div class="row">
        @foreach ($product as $key => $value)
            <div class="col-md-4 col-lg-3 mb-2">
				{{ $key }}: {{ $value }}
            </div>
        @endforeach
    </div>
@endsection
