@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <h1>All Products</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('products.create') }}" class="btn btn-lg btn-block btn-primary">Add New Product</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Abstract</th>
                    <th>Created at</th>
                    <th>ISBN</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <th>{{ $product->id }}
                            <td>{{ $product->title }}</td>
                            <td>author</td>
                            <td>{{ substr($product->abstract, 0, 50) }}{{ strlen($product->abstract) > 50 ? "..." : "" }}</td>
                            <td>{{ date('M j, Y H:i', strtotime($product->created_at)) }}</td>
                            <td>ISBN</td>
                            <td><a href="{{ route('products.show', $product->id) }}" class="btn btn-default">View</a><a href="{{ route('products.edit', $product->id) }}" class="btn btn-default">Edit</a></td>
                        </tr>
                       
                        @endforeach
                    

            </table>
            @foreach ($authors as $author)
            {{ $author->name }}
            @endforeach

            
            <div class="text-center">{!! $products->links(); !!}</div>
        </div>
    </div>
@endsection