@extends('layouts.master')

@section("content")
<div class="panel">
    <h1 class="row">Movie Collection</h1>
</div>
<div class="panel">
    <div class="row">
        Manage your movie collection:

        @foreach($movieCollection as $movie)
            <div class="row">{{ $movie->title }}</div>
        @endforeach
    </div>
</div>
@endsection
