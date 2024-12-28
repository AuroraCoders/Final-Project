<!-- resources/views/products/show.blade.php -->
@extends('layout')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->detail }}</p>

    @if($product->image_path)
    <!-- For displaying the product image -->
<img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }} image" width="200" height="200">

@else
    <p>No image available.</p>
@endif
@endsection
