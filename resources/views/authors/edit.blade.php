@extends('layouts.main')

@section('title', "| Edit Author")

@section('content')

    {{ Form::model($author, ['route' => ['authors.update', $author->id], 'method' => 'PUT']) }}

        {{ Form::label('name', "Name:") }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}

        {{ Form::label('name', "Name:") }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}

                            <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('Birthday') }}</label>

                            
                                <input id="birthday" type="date" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" name="birthday" value="{{ old('birthday') }}" required autofocus>

                                @if ($errors->has('birthday'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif


        {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-spacing-top']) }}

    {{ Form::close() }}

@endsection