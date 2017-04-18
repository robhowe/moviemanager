{{--
  -- See https://laracasts.com/discuss/channels/laravel/laravel-51-same-form-for-create-and-edit-page
  --}}

@if ($movieFormAction === 'create')
    {!! Form::open(['url' => 'moviecollection', 'class'=>'form-horizontal']) !!}
@else
    {!! Form::model($movieCollection, ['class'=>'form-horizontal', 'method'=>'PATCH', 'action'=>['MovieCollectionController@update', $movieCollection->id]]) !!}
@endif

    <div class="form-group required{!! getErrorsClass($errors, 'title') !!}">
        {{ Form::label('title', 'Movie Title:', ['class'=>'col-md-2']) }}
        <div class="col-md-5">
            {{ Form::text('title', null, ['class' => 'form-control']) }}
            {!! getErrorsContent($errors, 'title') !!}
        </div>
    </div>

    <div class="form-group{!! getErrorsClass($errors, 'imdb_id') !!}">
        {{ Form::label('imdb_id', 'IMDb ID:', ['class'=>'col-md-2']) }}
        <div class="col-md-3">
            {{ Form::text('imdb_id', null, ['class' => 'form-control', 'placeholder'=>'e.g.: tt0084787']) }}
            {!! getErrorsContent($errors, 'imdb_id') !!}
        </div>
    </div>

    <div class="form-group{!! getErrorsClass($errors, 'release_year') !!}">
        {{ Form::label('release_year', 'Release Year:', ['class'=>'col-md-2']) }}
        <div class="col-md-4">
            {{ Form::text('release_year', null, ['class' => 'form-control', 'placeholder'=>'Year Released >1800 and < 2100']) }}
            {!! getErrorsContent($errors, 'release_year') !!}
        </div>
    </div>

    <div class="form-group{!! getErrorsClass($errors, 'length') !!}">
        {{ Form::label('length', 'Length:', ['class'=>'col-md-2']) }}
        <div class="col-md-3">
            {{ Form::text('length', null, ['class' => 'form-control', 'placeholder'=>'# of minutes >0 and <500']) }}
            {!! getErrorsContent($errors, 'length') !!}
        </div>
    </div>

    <div class="form-group{!! getErrorsClass($errors, 'rating') !!}">
        {{ Form::label('rating', 'Rating:', ['class'=>'col-md-2']) }}
        <div class="col-md-2">
            @for ($loop = 1; $loop < 6; $loop++)
                {{ Form::radio('rating', $loop, ['class'=>'form-control']) }} 
                {!! getErrorsContent($errors, 'rating') !!}
            @endfor
            1-5
        </div>
    </div>

    <div class="form-group{!! getErrorsClass($errors, 'format') !!}">
        {{ Form::label('format', 'Format:', ['class'=>'col-md-2']) }}
        <div class="col-md-2">
            {{ Form::select('format',
                            (['','VHS','LaserDisc','DVD','Blu-ray','File','Streaming']),
                            null,
                            ['class'=> 'form-control'])
            }}
            {!! getErrorsContent($errors, 'format') !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-2">
        @if ($movieFormAction === 'create')
            {{ Form::submit("Add Movie", ['class' => 'btn btn-default', 'name' => $movieFormAction]) }}
        @else
            {{ Form::submit("Edit Movie", ['class' => 'btn btn-default', 'name' => $movieFormAction]) }}
        @endif
        </div>
        <div class="col-md-2"><a href="{{ route('moviecollection.index') }}" class="btn btn-default">Cancel</a></div>
    </div>    

    {{ Form::close() }}
