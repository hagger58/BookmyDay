@extends('layouts.main')
@section('content')
<p>{{ $product->title }}</p>
@foreach ($product->genres as $genre)
                <button>{{ $genre->name }}</button>
            @endforeach
@endsection