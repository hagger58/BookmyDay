@extends('layouts.main')

@section('title', '| All Authors')

@section('content')

    <div class="row">
        <div class="col-md-8">
            <h1>Authors</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($authors as $author)
                    <tr>
                        <th>{{ $author->id }}</th>
                        <td><a href="{{ route('authors.show', $author->id) }}">{{ $author->name }}</a></td>
                    </tr>
                    @endforeach
                </tbody>              
            </table>
        </div>

            <div class="col-md-3">
                <div class="well">
                {!! Form::open(['route' => 'authors.store', 'method' => 'POST']) !!}
                    <h2>New author</h2>
                    {{ Form::label('name', 'Name:') }}
                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                    
                        <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('Birthday') }}</label>                            
                        <input id="birthday" type="date" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" name="birthday" value="{{ old('birthday') }}" required autofocus>
                        @if ($errors->has('birthday'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('birthday') }}</strong>
                            </span>
                        @endif
                    
                        <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
    
                        <input type="radio" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="male" required autofocus>Male<br>
                        <input type="radio" class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender" value="female" required autofocus>Female<br>

                        @if ($errors->has('gender'))
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('gender') }}</strong>
                            </span>
                        @endif

    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>


    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

    @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
                    {{ Form::submit('Create New Author', ['class' => 'btn btn-primary btn-block btn-spacing-top']) }}
                {!! Form::close() !!}
                </div>
            </div>
    </div>
@endsection