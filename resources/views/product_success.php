@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Product Created Successfully</h1>
        <p>Your product has been created successfully.</p>
        <a href="{{ route('products.index') }}" class="btn btn-primary">Back to Product List</a>
    </div>
@endsection
