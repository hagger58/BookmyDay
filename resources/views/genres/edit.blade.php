@extends('layouts.main')

@section('title', "| Edit Genre")

@section('content')

    {{ Form::model($genre, ['route' => ['genres.update', $genre->id], 'method' => 'PUT']) }}

        {{ Form::label('name', "Name:") }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}

        {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-spacing-top']) }}

    {{ Form::close() }}

@endsection