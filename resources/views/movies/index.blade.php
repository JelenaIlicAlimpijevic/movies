@extends('layouts.master')

@section('title')
    All posts
@endsection

@section('content')
        @foreach($movies as $movie)
          <div class="show movie">

            <h2 class="movie-title">
                <a href=" {{ route(
                                'single-movie',
                                [ 'id' => $movie->id ]
                             )
                         }} ">
                    {{ $movie->title }}
                </a>
            </h2>
            <p>{{ $movie->storyline }} </p>
        </div>
        @endforeach
@endsection