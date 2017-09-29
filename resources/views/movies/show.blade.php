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

@if(count($movie->comments))
        <hr/>
        <h4>Comments:</h4>
        <ul class="list-unstyled">
            @foreach($movie->comments as $comment)
                <li>
                    <p>
                        <strong>Author:</strong> {{ $comment->created_at }}
                    </p>
                    <p>
                        {{ $comment->content }}
                    </p>
                </li>
            @endforeach
        </ul>
    @endif
    <h4>Movie a comment</h4>
        <form method="POST" action="{{ route('comments-movie', ['movie_id' => $movie->id]) }}">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="created_at">Created at:</label>
            <input type="date" class="form-control" id="created_at" name="created_at"/>
            @include('partials.error-message', ['fieldTitle' => 'created_at'])
        </div>

        <div class="form-group">
            <label for="content">Comment:</label>
            <textarea class="form-control" id="content" name="content"></textarea>
            @include('partials.error-message', ['fieldTitle' => 'content'])
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>


@endsection