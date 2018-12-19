@extends('layouts.main')

@section('title', '|Delete Review?')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
    <br>
    <br>
        <h5>Delete this Review?</h5>
        <p>
            <strong>Title:</strong> {{ $review->title }}<br>
            <strong>Name:</strong> {{ $review->name }}<br>
            <strong>Email:</strong> {{ $review->email }}<br>
            <strong>Rating:</strong> {{ $review->rating }}<br>
            <strong>Review:</strong> {{ $review->review }}
</p>
{{ Form::open(['route' => ['reviews.destroy', $review->id], 'method' => 'DELETE']) }}
    {{ Form::submit('Yes, Delete this review', ['class' => 'btn btn-lg btn-block btn-danger']) }}
{{ Form::close() }}
<hr>
<a href="{{ url()->previous() }}" class="btn btn-default btn-block">Cancel</a>
    </div>
    
</div>
@endsection