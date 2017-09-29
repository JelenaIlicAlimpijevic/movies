@extends('layouts.master')
@section('title')
    {{ $movie->title }}
@endsection

@section('content')
    <h1 class="movie-title"> {{ $movie->title }} </h1>
    <p>{{ $movie->genre}}</p>
    <p>{{ $movie->storyline }}</p>
    <p>{{ $movie->director }}</p>
    <p>{{ $movie->created_at }}</p>

@endsection