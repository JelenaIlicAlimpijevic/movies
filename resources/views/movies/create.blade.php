@extends('layouts.master')

@section('title')
    Create new movie
@endsection
@section('content')
<h2 class="blog-post-title">Create new movie</h2>

    <form method="POST" action="{{ route('store-movie') }}">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title"/>
            @include(
                'partials.error-message',
                ['fieldTitle' => 'title']
            )
        </div>

        <div class="form-group">
            <label for="storyline">Storyline</label>
            <textarea class="form-control" id="storyline" name="storyline"></textarea>
            @include(
                'partials.error-message',
                ['fieldTitle' => 'storyline']
            )
        </div>

        <div class="form-group">
            <label for="genre">Genre</label>
            <input type class="form-control" id="genre" name="genre"></textarea>
            @include(
                'partials.error-message',
                ['fieldTitle' => 'genre']
            )
        </div>

        <div class="form-group">
            <label for="director">Director</label>
            <input type class="form-control" id="director" name="director"></textarea>
            @include(
                'partials.error-message',
                ['fieldTitle' => 'director']
            )
        </div>

        <div class="form-group">
            <label for="created_at">Created at</label>
            <input type class="form-control" id="created_at" name="created_at"></textarea>
            @include(
                'partials.error-message',
                ['fieldTitle' => 'director']
            )
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection