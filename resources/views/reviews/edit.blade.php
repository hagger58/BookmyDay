@extends('layouts.main')

@section('title', '| Edit Review')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2"> 
        <h1>Edit Review</h1>

        {{ Form::model($review, ['route' => ['reviews.update', $review->id], 'method' => 'PUT']) }}
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, ['class' => 'form-control']) }}

            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}

            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email', null, ['class' => 'form-control']) }}

            {{ Form::label('rating', 'Rating:') }}
                <select class="form-control" name="rating">
                    <option value="{{ $review->rating }}">{{ $review->rating }}</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select> 

            {{ Form::label('review', 'Review:') }}
            {{ Form::textarea('review', null, ['class' => 'form-control']) }}

            {{ Form::submit('Update Review', ['class' => 'btn btn-block btn-success']) }}
        {{ Form::close() }}
        </div>
    </div>

@endsection