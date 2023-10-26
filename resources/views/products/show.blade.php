@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Product Details</h1>
        <div class="card">
            <div class="card-body">
                <h3>Name: {{ $product->name }}</h3>
                <p>Description: {{ $product->description }}</p>
                <p>Price: ${{ $product->price }}</p>
                <img src="{{ asset('images/products/' . $product->image) }}" alt="Product Image" width="200">
            </div>
        </div>
        <a href="{{ route('products.index') }}" class="btn btn-primary">Back to Product List</a>
    </div>
@endsection
