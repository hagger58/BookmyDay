@extends('layouts.main')

@section('stylesheets')
    {!! Html::style('css/parsley.css')!!}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Product</h1>
            <hr>
            {!! Form::open(array('route' => 'products.store', 'data-parsley-validate' => '')) !!}
                {{ Form::label('title', 'Title:', ['class' => 'form-spacing-top']) }}
                {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'minlength' => '3', 'maxlength' => '100')) }}
                
                {{ Form::label('ISBN', 'ISBN:') }}
                {{ Form::text('slug', null, ['class' => 'form-control', 'required' => '', 'minlength' => '10', 'maxlength' => '20']) }}
               
                {{ Form::label('category_id', 'Category:') }}
                <select class="form-control" name="category_id">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>

                {{ Form::label('subcategory_id', 'SubCategory:') }}
                <select class="form-control" name="subcategory_id">
                    @foreach($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                    @endforeach
                </select>
                
                {{ Form::label('genres', 'Genre:') }}
                <select class="form-control select2-multi" name="genres[]" multiple="multiple">
                    @foreach($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>

                
                {{ Form::label('abstract', 'Abstract:', ['class' => 'form-spacing-top']) }}
                {{ Form::textarea('abstract', null, array('class' => 'form-control', 'required' => '', 'minlength' => '3')) }}
                
                {{ Form::submit('Create Product', array('class' => 'btn btn-success btn-lg btn-block')) }}
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>$(document).ready(function() {$('.select2-multi').select2(); });</script>
@endsection



    