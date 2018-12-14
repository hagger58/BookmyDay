@extends('layouts.main')

@section('title', '| Create Product')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Product</h1>
            <hr>
            {!! Form::open(array('route' => 'products.store', 'data-parsley-validate' => '', 'files' => true)) !!}
                {{ Form::label('title', 'Title:', ['class' => 'form-spacing-top']) }}
                {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'minlength' => '3', 'maxlength' => '100')) }}
                
                {{ Form::label('ISBN', 'ISBN:') }}
                {{ Form::text('ISBN', null, ['class' => 'form-control', 'required' => '', 'minlength' => '10', 'maxlength' => '20']) }}
               
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
                
                {{ Form::label('price', 'Price:', ['class' => 'form-spacing-top']) }}                
                        <input id="price" type="number" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value="{{ old('price') }}" required autofocus>

                                @if ($errors->has('price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                
                {{ Form::label('genres', 'Genre:') }}
                <select class="form-control select2-multi" name="genres[]" multiple="multiple">
                    @foreach($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>

                {{ Form::label('authors', 'Author:') }}
                <select class="form-control select2-multi" name="authors[]" multiple="multiple">
                    @foreach($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>

                {{ Form::label('booktypes', 'Booktype:') }}
                <select class="form-control select2-multi" name="booktypes[]" multiple="multiple">
                    @foreach($booktypes as $booktype)
                    <option value="{{ $booktype->id }}">{{ $booktype->name }}</option>
                    @endforeach
                </select>                          
                
                {{ Form::label('abstract', 'Abstract:', ['class' => 'form-spacing-top']) }}
                {{ Form::textarea('abstract', null, array('class' => 'form-control', 'required' => '', 'minlength' => '3')) }}
                
                {{ Form::label('featured_image', 'Upload Featured Image') }}
                {{ Form::file ('featured_image') }}

                {{ Form::submit('Create Product', array('class' => 'btn btn-success btn-lg btn-block')) }}
            {!! Form::close() !!}
        </div>
    </div>
@endsection






    