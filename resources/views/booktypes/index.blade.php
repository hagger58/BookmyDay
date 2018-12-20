@extends('layouts.main')

@section('title', '| All Booktypes')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Booktypes</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($booktypes as $booktype)
                    <tr>
                        <th>{{ $booktype->id }}</th>
                        <td><a href="{{ route('booktypes.show', $booktype->id) }}">{{ $booktype->name }}</a></td>
                    </tr>
                    @endforeach
                </tbody>              
            </table>
        </div>

            <div class="col-md-3">
                <div class="well">
                {!! Form::open(['route' => 'booktypes.store', 'method' => 'POST']) !!}
                    <h2>New Booktype</h2>
                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                    {{ Form::submit('Create New Booktype', ['class' => 'btn btn-primary btn-block btn-spacing-top']) }}
                {!! Form::close() !!}
                </div>
            </div>
    </div>
@endsection