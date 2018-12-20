@extends('layouts.main')

@section('title', "| Edit Booktype")

@section('content')

    {{ Form::model($booktype, ['route' => ['booktypes.update', $booktype->id], 'method' => 'PUT']) }}

        {{ Form::label('name', "Name:") }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}

        {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-spacing-top']) }}

    {{ Form::close() }}

@endsection