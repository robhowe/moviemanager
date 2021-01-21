@extends('layouts.master')

@section("content")
<div class="panel">
    <h1 class="row">Rob Movie Manager</h1>
</div>
<div class="panel">
    <div class="row">
        <p>Manage your own movie collection.  Sign up now - for free!!</p>
        <a href="{{ route('moviecollection.index') }}">
            <img class="moviem-splash moviem-splash-s" src="/images/moviem_splash_s.png" alt="movies logo">
            <img class="moviem-splash moviem-splash-m" src="/images/moviem_splash_m.png" alt="movies logo">
            <img class="moviem-splash moviem-splash-l" src="/images/moviem_splash_l.png" alt="movies logo">
        </a>
    </div>
</div>
@endsection
