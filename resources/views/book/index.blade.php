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
<<<<<<< HEAD
<<<<<<< HEAD
                <img src="{{ asset('images/' . $product->image) }}" height="480" width="300" alt="Image not working."/>
=======
                <img src="{{ asset('images/' . $product->image) }}" height="400" width="100%" alt="Image not working."/>
>>>>>>> 556e375ea2b3df437f34bddcfcc4d99abf1e896e
=======
                <img src="{{ asset('images/' . $product->image) }}" height="480" width="300" alt="Image not working."/>
>>>>>>> 073d9a6395cfdb7a32d6e83e5432707bdc4e3ffd
            </div>
            <br>
            <div class="col-md-4">
                <a href="{{ route('book.single', $product->id) }}" class="btn btn-lg btn-block btn-primary">View Product</a>
                <p>€{{ $product->price }}</p>
            </div>
            <hr>
        @endforeach
    </div>
</div>


    

@endsection