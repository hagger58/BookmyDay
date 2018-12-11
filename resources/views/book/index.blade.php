@extends('layouts.main')

@section('content')
<div class="col-md-12">
        <hr>
    </div>
<div class="row">
    <h1>Products</h1>
    <div class="col-md-12">
    
        @foreach ($products as $product)
            <div class="col-md-8">
                <h2>{{ $product->title }}</h2>
                <img src="{{ asset('images/' . $product->image) }}" height="400" width="100%" alt="Image not working."/>
                <strong>{{ date('M j, Y H:i', strtotime($product->created_at)) }}</strong>
                <hr>
                <p>{{ $product->abstract }}</p>
            </div>
            <div class="col-md-4">
                <a href="{{ route('book.single', $product->id) }}" class="btn btn-lg btn-block btn-primary">View Product</a>
            </div>
            <hr>
        @endforeach
    </div>
</div>


    

@endsection