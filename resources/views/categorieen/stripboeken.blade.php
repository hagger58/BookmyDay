@extends('layouts.main')

@section('content')
<h1>Stripboeken</h1>
<a href="/stripboeken/superhelden">Superhelden</a><br>
@foreach($images as $image)
                {{ $image->title }}
                @endforeach
<a href="/stripboeken/graphicnovels">Graphic Novels</a><br>
<a href="/stripboeken/manga">Manga</a>
@endsection