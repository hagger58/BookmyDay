@extends('layouts.main')

@section('title', '| All Genres')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Genres</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($genres as $genre)
                    <tr>
                        <th>{{ $genre->id }}</th>
                        <td><a href="{{ route('genres.show', $genre->id) }}">{{ $genre->name }}</a></td>
                    </tr>
                    @endforeach
                </tbody>              
            </table>
        </div>

            <div class="col-md-3">
                <div class="well">
                {!! Form::open(['route' => 'genres.store', 'method' => 'POST']) !!}
                    <h2>New Genre</h2>
                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                    {{ Form::submit('Create New Genre', ['class' => 'btn btn-primary btn-block btn-spacing-top']) }}
                {!! Form::close() !!}
                </div>
            </div>
    </div>
@endsection