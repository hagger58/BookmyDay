@extends('layouts.main')

@section('title', "| $booktype->name")

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $booktype->name }} <small> {{ $booktype->products()->count() }} Products</small></h1>
        </div>
    
        <div class="col-md-2">
            <a href="{{ route('booktypes.edit', $booktype->id) }}" class="btn btn-primary pull-right btn-block btn-h1-spacing">Edit</a>
        </div>
    
        <div class="col-md-2">
            {{ Form::open(['route' => ['booktypes.destroy', $booktype->id], 'method' => 'DELETE']) }}
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
                        <th>Booktypes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($booktype->products as $product)
                    <tr>
                        <th>{{ $product->id }}</th>
                        <td>{{ $product->title }}</td>
                        <td>@foreach ($product->booktypes as $booktype)
                            <button>{{ $booktype->name }}</button>
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