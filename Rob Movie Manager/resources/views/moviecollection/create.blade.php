@extends('layouts.master')

@section('content')
<div class="panel">
    <h1 class="row">Add a Movie to your collection:</h1>
</div>
<div class="panel-body">
@include("shared.movieform")
</div>
@endsection
