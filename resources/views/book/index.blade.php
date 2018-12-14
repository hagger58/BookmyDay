@extends('layouts.main')

@section('content')
<div class="col-md-12">
<br>
    </div>
<div class="row">
    <h1>Products</h1>
    <div class="col-md-12">
    <br>
            @foreach ($products as $product)
            <div class="col-md-8">
                <h2>{{ $product->title }}</h2>
                <br>
                <img src="{{ asset('images/' . $product->image) }}" height="480" width="300" alt="Image not working."/>
            </div>
            <br>
            <div class="col-md-4">
                <a href="{{ route('book.single', $product->id) }}" class="btn btn-lg btn-block btn-primary">View Product</a>
                <p>Price</p>
            </div>
            <hr>
        @endforeach
    </div>
</div>


    

@endsection