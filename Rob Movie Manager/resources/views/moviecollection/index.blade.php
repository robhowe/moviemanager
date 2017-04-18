@extends('layouts.master')

@section("content")
<div class="panel">
    <h1 class="row">Movie Collection</h1>
</div>
<div class="panel">
    <div class="row strong">
        <div class="col-md-3">Title</div>
        <div class="col-md-1">Format</div>
        <div class="col-md-2">Length</div>
        <div class="col-md-2">Release Year</div>
        <div class="col-md-1">Rating</div>
    </div>

    @foreach($movieCollection as $movie)
        <div class="row">
            <div class="col-md-3">
                @if (empty($movie->imdb_id))
                    {{ $movie->title }}
                @else
                    <a href="http://www.imdb.com/title/{{ $movie->imdb_id }}" target="_blank">{{ $movie->title }}</a>
                @endif
            </div>
            <div class="col-md-1">{{ getDisplayFormat($movie->format) }}</div>
            <div class="col-md-2">{{ getDisplayMinutes($movie->length) }}</div>
            <div class="col-md-2">{{ $movie->release_year }}</div>
            <div class="col-md-1">{{ $movie->rating }}</div>

            <div class="col-md-1"><a href="{{ route('moviecollection.edit', [$movie->id]) }}" class="btn btn-default">Edit</a></div>
            <div class="col-md-1"><a href="{{ url('/moviecollection/' . $movie->id . '/delete') }}" class="btn btn-default">Delete</a></div>
        </div>
    @endforeach
    <div class="row">
        <a href="{{ route('moviecollection.create') }}" class="btn btn-default">Add a Movie</a>
    </div>
</div>
@endsection
