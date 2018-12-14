@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-md-8">
    <img src="{{ asset('images/' . $product->image) }}" height="480" width="300" alt="Image not working."/>
        <div>
            <br>
        </div>
        <h1>{{ $product->title }}</h1>
        <p>{{ $product->abstract }}</p>
        <P>Price</p>
        <br>
        <br>
    </div>
    <div class="col-md-4">
        <div class="well">
            <hr>
            <dl class="dl-horizontal">
                <label><strong>ISBN</strong></label><br>
                    {{ $product->ISBN }}
            </dl>
            <dl class="dl-horizontal">
                <label><strong>Category</strong></label>
                <p>{{ $product->category->name }}</p>
            </dl>
            <dl class="dl-horizontal">
                <label><strong>Sub-Category</strong></label>
                <p>{{ $product->subcategory->name }}</p>
            </dl>
            <dl class="dl-horizontal">
                <label><strong>Genres</strong></label><br>
                @foreach ($product->genres as $genre)
                    {{ $genre->name }}
                @endforeach
            </dl>
            <dl class="dl-horizontal">
                <label><strong>Authors</strong></label><br>
                @foreach ($product->authors as $author)
                    {{ $author->name }}
                @endforeach
            </dl>
            <dl class="dl-horizontal">
                <label><strong>Booktypes</strong></label><br>
                @foreach ($product->booktypes as $booktype)
                    {{ $booktype->name }}
                @endforeach
            </dl>
            <hr>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
    <h5>Number of Reviews: <small>{{ $product->review()->count() }}</small></h5>
    <br>
    @foreach($product->review as $review)        
        <div class="review">
            <p><strong>Title: </strong>{{ $review->title }}</p>
            <p><strong>Name: </strong>{{ $review->name }}</p>
            <p><strong>Email: </strong>{{ $review->email }}</p>
            <p><strong>Rating: </strong>{{ $review->rating }}</p>
            <p><strong>Review: </strong><br>{{ $review->review }}</p>
            <br>
            <hr>
            <br>
        </div>
    @endforeach
    </div>
</div>

<div class="row">
    <div class="review-form" class="col-md-8 col-md-offset-2">
        <div class="container">
            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Create a review!</button>
            @guest
            <div id="demo" class="collapse">
                <br>
                <h5>Log in first! Click <a href="{{ route('login') }}">here</a> to log in!</h5>
            </div>
            @else
            <div id="demo" class="collapse">
                <br>
                <h5>Your Review</h5>
                <p>We zijn blij dat je een review wil schrijven. Je helpt zo anderen bij het maken van hun keuze. Als je vragen of opmerkingen hebt over bijvoorbeeld prijs of levertijd, kunnen we je beter helpen bij de klantenservice.</p>
                        {{ Form::open(['route' => ['reviews.store', $product->id], 'method' => 'POST']) }}
                <div class="row">
                    <div class="col-md-6">
                        {{ Form::label('title', "Title:") }}
                        {{ Form::text('title', null, ['class' => 'form-control']) }}

                        {{ Form::label('name', "Name:") }}
                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                    </div>
                    <div class="col-md-6">
                        {{ Form::label('email', 'Email:') }}
                        {{ Form::text('email', null, ['class' => 'form-control']) }}

                        {{ Form::label('rating', 'Rating:') }}
                        <select class="form-control" name="rating">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select> 
                    </div>
                    <div class="col-md-12">
                        {{ Form::label('review', "Review:") }}
                        {{ Form::textarea('review', null, ['class' => 'form-control', 'rows' => '5' ]) }}

                        {{ Form::submit('Add Review', ['class' => 'btn btn-success btn-block btn-spacing-top']) }}
                    </div>
                </div>
                        {{ Form::close() }}
            </div>
            @endguest
        </div>
    </div>
</div>  
@endsection