@extends('layouts.master')

@section("content")
<div class="panel">
    <h1 class="row">Rob Movie Manager</h1>
</div>
<div class="panel">
    <div class="row">
        Manage your own movie collection.  Sign up now - for free!
        <a href="{{ route('moviecollection.index') }}"><img id="moviem-splash" src="images/moviem_splash.png" alt="cool graphic splash image" /></a>
    </div>
</div>
@endsection
