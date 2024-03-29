@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>{{ __('Welcome, you are logged in!') }}</p>

                    <div>
                        <p>{{ __('You can now use the following features:') }}</p>
                        <ul>
                            <li><a href="{{ route('products.create') }}">{{ __('Create a new product') }}</a></li>
                            <li><a href="{{ route('products.index') }}">{{ __('View your products') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
