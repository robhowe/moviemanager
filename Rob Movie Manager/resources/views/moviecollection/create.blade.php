@extends('layouts.master')

@section('content')
<div class="panel">
    <h1 class="row">Add a movie to your collection:</h1>
</div>
<div class="panel-body">
@include('shared.movieform', ['movieFormAction' => 'create'])
</div>
@endsection
