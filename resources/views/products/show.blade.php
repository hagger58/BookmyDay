@extends('layouts.main')

@section('title', '| View Product')

@section('content')

<div class="row">
    <div class="col-md-8">
    <img src="{{ asset('images/'.$product->image) }}" height="400" width="100%" alt="Image not working." />
        <hr>
        <h1>{{ $product->title }}</h1>
        <hr>
        <h5>Abstract</h5>
        <p class="lead">{{ $product->abstract  }}</p>
        <hr>
        <div class="genres">
        <h5>Genres</h5>
            @foreach ($product->genres as $genre)
                <button>{{ $genre->name }}</button>
            @endforeach
        </div>
        <hr>
        <div class="authors">
        <h5>Authors</h5>
            @foreach ($product->authors as $author)
                <button>{{ $author->name }}</button>
            @endforeach
        </div>
        <hr>
        <div class="booktypes">
        <h5>Booktypes</h5>
            @foreach ($product->booktypes as $booktype)
                <button>{{ $booktype->name }}</button>
            @endforeach
        </div>
    </div>
    <div class="col-md-4">
        <div class="well">
            <hr>
            <dl class="dl-horizontal">
                <label><strong>Category</strong></label>
                <p>{{ $product->category->name }}</p>
            </dl>
            <dl class="dl-horizontal">
                <label><strong>Sub-Category</strong></label>
                <p>{{ $product->subcategory->name }}</p>
            </dl>
            <dl class="dl-horizontal">
                <label><strong>Created At:</strong></label>
                <p>{{ date('M j, Y H:i', strtotime($product->created_at)) }}</p>
            </dl>
            <dl class="dl-horizontal">
                <label><strong>Last Updated:</strong></label>
                <p>{{ date('M j, Y H:i', strtotime($product->updated_at)) }}</p>
            </dl>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    {!! Html::linkRoute('products.edit', 'Edit', array($product->id), array('class' => 'btn btn-primary btn-block')) !!}
                </div>
                <div class="col-sm-6">
                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{ Html::linkRoute('products.index', 'See all products', [], ['class' => 'btn btn-secondary btn-block btn-h1-spacing']) }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection