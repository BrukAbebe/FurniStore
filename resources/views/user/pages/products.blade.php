@extends('user.layouts.master')

@section('title', 'Products in ' . $category->name)

@section('content')
<div class="container mt-5">
    <h2>Products in {{ $category->name }}</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($products as $product)
        <div class="col">
            <div class="card product-card">
                <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top product-image" alt="{{ $product->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">${{ $product->price }}</p>
                    <a href="{{ route('product.detail', $product->id) }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    .product-card {
        transition: transform 0.2s ease;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        cursor: pointer;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .product-card img {
        width: 100%;
        height: 250px; /* Adjust height as needed */
        object-fit: cover;
    }

    .product-card:hover img {
        transform: scale(1.1);
    }
</style>

@endsection
