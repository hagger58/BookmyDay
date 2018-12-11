@extends('layouts.main')

@section('title', '| Edit Product')

@section('content')
    <div>
        {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT', 'files' => true]) !!}
        <div class="col-md-8">
            {{ Form::label('title', 'Title:', ['class' => 'form-spacing-top']) }}
            {{ Form::text('title', null, ["class" => 'form-control']) }}
            
            {{ Form::label('ISBN', 'ISBN:', ['class' => 'form-spacing-top']) }}
            {{ Form::text('ISBN', null, ['class' => 'form-control']) }}
            
            {{ Form::label('category_id', 'Category:') }}
            {{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}

            {{ Form::label('subcategory_id', 'Sub-Category:') }}
            {{ Form::select('subcategory_id', $subcategories, null, ['class' => 'form-control']) }}

            {{ Form::label('genres', 'Genres:', ['class' => 'form-spacing-top']) }}
            {{ Form::select('genres[]', $genres, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}

            {{ Form::label('authors', 'Authors:', ['class' => 'form-spacing-top']) }}
            {{ Form::select('authors[]', $authors, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}

            {{ Form::label('booktypes', 'Booktypes:', ['class' => 'form-spacing-top']) }}
            {{ Form::select('booktypes[]', $booktypes, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}
          
            {{ Form::label('abstract', 'Abstract:', ['class' => 'form-spacing-top']) }}
            {{ Form::textarea('abstract', null, ["class" => 'form-control']) }}

            {{ Form::label('featured_image', 'Update Featured Image:', ['class' => 'form-spacing-top']) }}
            {{ Form::file('featured_image', ['class' => 'form-control']) }}
        </div>
    
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created At:<dt>
                    <dd>{{ date('M j, Y H:i', strtotime($product->created_at)) }}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Last Updated:<dt>
                    <dd>{{ date('M j, Y H:i', strtotime($product->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('products.show', 'Cancel', array($product->id), array('class' => 'btn btn-danger btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {{ Form::submit('Save', ['class' => 'btn btn-success btn-block']) }}
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>

        
    
@endsection
