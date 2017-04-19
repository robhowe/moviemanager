@extends('layouts.master')

@section("content")
<div class="panel">
    <h1 class="row">Rob Movie Manager</h1>
</div>
<div class="panel">
    <div class="row">
        <p>Manage your own movie collection.  Sign up now - for free!</p>
        <a class="moviem-splash" href="{{ route('moviecollection.index') }}"></a>
    </div>
</div>
@endsection
