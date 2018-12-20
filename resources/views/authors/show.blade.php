@extends('layouts.main')

@section('title', "| $author->name")

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $author->name }} <small> {{ $author->products()->count() }} Products</small></h1>
        </div>
    
        <div class="col-md-2">
            <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-primary pull-right btn-block btn-h1-spacing">Edit</a>
        </div>
    
        <div class="col-md-2">
            {{ Form::open(['route' => ['authors.destroy', $author->id], 'method' => 'DELETE']) }}
                {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block btn-h1-spacing'])}}
            {{ Form::close() }}
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>authors</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($author->products as $product)
                    <tr>
                        <th>{{ $product->id }}</th>
                        <td>{{ $product->title }}</td>
                        <td>@foreach ($product->authors as $author)
                            <button>{{ $author->name }}</button>
                            @endforeach
                        </td>
                        <td><a href="{{ route('products.show', $product->id) }}" class="btn btn-default btns-xs">View</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection