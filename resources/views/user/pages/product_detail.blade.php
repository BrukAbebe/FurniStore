@extends('user.layouts.master')

@section('title', $product->name)

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid" alt="{{ $product->name }}">
        </div>
        <div class="col-md-6">
            <h1>{{ $product->name }}</h1>
            <p class="text-muted">${{ $product->price }}</p>
            <p>{{ $product->description }}</p>
            <button class="btn btn-primary">Add to Cart</button>
        </div>
    </div>
</div>

<style>
    .product-image {
        width: 100%;
        height: auto;
        object-fit: cover;
    }
</style>
@endsection
