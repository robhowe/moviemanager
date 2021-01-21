{{--
  -- This page is currently only used by the "delete" action.
  -- @TODO - Might be better to have the Delete button simply
  --         use a dialog rather than this confirmation page.
  --}}

@extends('layouts.master')

@section('content')
<div class="panel">
    <h1 class="row">Delete a movie from your collection:</h1>
</div>
<div class="panel-body">
@include('shared.movieform', ['movieFormAction' => 'delete'])
</div>
@endsection
