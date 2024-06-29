@extends('admin.layouts.master')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card mb-3">
            <div class="card-header bg-primary text-white">
                Categories
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $categoryCount }}</h5>
                <p class="card-text">Total categories in the system.</p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card mb-3">
            <div class="card-header bg-success text-white">
                Products
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $productCount }}</h5>
                <p class="card-text">Total products in the system.</p>
            </div>
        </div>
    </div>
</div>
@endsection
