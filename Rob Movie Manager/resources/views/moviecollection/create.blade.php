@extends('layouts.master')

@section('content')
<div class="panel">
    <h1 class="row">Add a Movie to your collection:</h1>
</div>
<div class="panel-body">
    {{ Form::open(['url' => 'moviecollection', 'class'=>'form-horizontal']) }}

    <div class="form-group">
        {{ Form::label('title', 'Movie Title:', ['class'=>'col-md-2']) }}
        <div class="col-md-6">
            {{ Form::text('title', null, ['class' => 'form-control']) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('imdb_id', 'IMDb ID:', ['class'=>'col-md-2']) }}
        <div class="col-md-3">
            {{ Form::text('imdb_id', null, ['class' => 'form-control', 'placeholder'=>'e.g.: tt0084787']) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('release_year', 'Release Year:', ['class'=>'col-md-2']) }}
        <div class="col-md-4">
            {{ Form::text('release_year', null, ['class' => 'form-control', 'placeholder'=>'Year Released >1800 and < 2100']) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('length', 'Length:', ['class'=>'col-md-2']) }}
        <div class="col-md-3">
            {{ Form::text('length', null, ['class' => 'form-control', 'placeholder'=>'# of minutes >0 and <500']) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('rating', 'Rating:', ['class'=>'col-md-2']) }}
        <div class="col-md-2">
            @for ($loop = 1; $loop < 6; $loop++)
                {{ Form::radio('rating', $loop, ['class'=>'form-control']) }} 
            @endfor
            1-5
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('format', 'Format:', ['class'=>'col-md-2']) }}
        <div class="col-md-2">
            {{ Form::select('format',
                            (['','VHS','LaserDisc','DVD','Blu-ray','File','Streaming']),
                            null,
                            ['class'=> 'form-control'])
            }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-4">
            {{ Form::submit("Add Movie", ['class'=> 'btn', 'name'=>'Create']) }}
        </div>
    </div>    

    {{ Form::close() }}
</div>
@endsection
