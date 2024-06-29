@extends('user.layouts.master')

@section('title', 'Home')

@section('content')
<div class="container mt-5">
    <h2>All Categories</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach($categories as $category)
        <div class="col">
            <div class="card category-card">
                <img src="{{ asset('storage/' . $category->image) }}" class="card-img-top category-image" alt="{{ $category->name }}">
                <div class="card-body">
                    <h2 class="card-title">{{ $category->name }}</h2>
                    <p class="card-text">{{ $category->description }}</p>
                    <a href="{{ route('category.products', $category->id) }}" class="btn btn-primary">View Products</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <h2 class="mt-5">All Products</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($products as $product)
        <div class="col">
            <div class="card product-card">
                <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top product-image" alt="{{ $product->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">${{ $product->price }}</p>
                    <a href="{{route('product.detail',$product->id)}}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    .category-card,
    .product-card {
        transition: transform 0.2s ease;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        cursor: pointer;
    }

    .category-card:hover,
    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .category-card img,
    .product-card img {
        width: 100%;
        height: 200px; 
        object-fit: cover;
    }

    .product-card img {
        height: 250px; 
    }

    .category-card:hover img,
    .product-card:hover img {
        transform: scale(1.1);
    }
</style>

@endsection
