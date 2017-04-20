{{--
  -- See https://laracasts.com/discuss/channels/laravel/laravel-51-same-form-for-create-and-edit-page
  --}}

@if ($movieFormAction === 'create')
    {!! Form::open(['url' => 'moviecollection',
                    'class' => 'form-horizontal'])
    !!}
@elseif ($movieFormAction === 'update')
    {!! Form::model($movie, ['class' => 'form-horizontal',
                                       'method' => 'PATCH',
                                       'action' => ['MovieCollectionController@update', $movie->id]])
    !!}
@else
    {!! Form::model($movie, ['class' => 'form-horizontal',
                                       'method' => 'DELETE',
                                       'action' => ['MovieCollectionController@destroy', $movie->id]])
    !!}
@endif

    <div class="form-group required{!! getErrorsClass($errors, 'title') !!}">
        {{ Form::label('title', 'Movie Title:', ['class'=>'col-md-2']) }}
        <div class="col-md-5">
            {{ Form::text('title', null, ['class' => 'form-control', getDisabled($movieFormAction)]) }}
            {!! getErrorsContent($errors, 'title') !!}
        </div>
    </div>

    <div class="form-group{!! getErrorsClass($errors, 'tmdb_id') !!}">
        {{ Form::label('tmdb_id', 'TMDb ID:', ['class'=>'col-md-2']) }}
        <div class="col-md-3">
            {{ Form::text('tmdb_id', null, ['class' => 'form-control',
                                            'placeholder' => 'e.g.: 123456',
                                            getDisabled($movieFormAction)])
            }}
            {!! getErrorsContent($errors, 'tmdb_id') !!}
        </div>
    </div>

    <div class="form-group{!! getErrorsClass($errors, 'imdb_id') !!}">
        {{ Form::label('imdb_id', 'IMDb ID:', ['class'=>'col-md-2']) }}
        <div class="col-md-3">
            {{ Form::text('imdb_id', null, ['class' => 'form-control',
                                            'placeholder' => 'e.g.: tt0084787',
                                            getDisabled($movieFormAction)])
            }}
            {!! getErrorsContent($errors, 'imdb_id') !!}
        </div>
    </div>

    <div class="form-group{!! getErrorsClass($errors, 'release_year') !!}">
        {{ Form::label('release_year', 'Release Year:', ['class'=>'col-md-2']) }}
        <div class="col-md-4">
            {{ Form::text('release_year', null, ['class' => 'form-control',
                                                 'placeholder' => 'Year Released >1800 and < 2100',
                                                 getDisabled($movieFormAction)])
            }}
            {!! getErrorsContent($errors, 'release_year') !!}
        </div>
    </div>

    <div class="form-group{!! getErrorsClass($errors, 'length') !!}">
        {{ Form::label('length', 'Length:', ['class'=>'col-md-2']) }}
        <div class="col-md-3">
            {{ Form::text('length', null, ['class' => 'form-control',
                                           'placeholder' => '# of minutes >0 and <500',
                                           getDisabled($movieFormAction)])
            }}
            {!! getErrorsContent($errors, 'length') !!}
        </div>
    </div>

    <div class="form-group{!! getErrorsClass($errors, 'rating') !!} {{ getDisabled($movieFormAction) }}">
        {{ Form::label('rating5', 'Rating:', ['class'=>'col-md-2']) }}
        <div class="col-md-2 {{ getDisabled($movieFormAction) }}">
            @for ($loop = 1; $loop < 6; $loop++)
                {{ Form::radio('rating', $loop, false, ['id'=>'rating'.$loop, 'class'=>'radio-inline', getDisabled($movieFormAction)]) }} 
                {!! getErrorsContent($errors, 'rating') !!}
            @endfor
            1-5
        </div>
    </div>

    <div class="form-group required{!! getErrorsClass($errors, 'format') !!}">
        {{ Form::label('format', 'Format:', ['class'=>'col-md-2']) }}
        <div class="col-md-3">
            {{ Form::select('format',
                            (['-- Select --','VHS','LaserDisc','DVD','Blu-ray','File','Streaming']),
                            null,
                            ['class'=> 'form-control', getDisabled($movieFormAction)])
            }}
            {!! getErrorsContent($errors, 'format') !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-4 btn-toolbar">
        @if ($movieFormAction === 'create')
            {{ Form::submit("Add Movie", ['class' => 'btn btn-primary btn-wide', 'name' => $movieFormAction]) }}
        @elseif ($movieFormAction === 'update')
            {{ Form::submit("Save", ['class' => 'btn btn-primary btn-wide', 'name' => $movieFormAction]) }}
        @else
            {{ Form::submit("Delete Movie", ['class' => 'btn btn-danger', 'name' => $movieFormAction]) }}
        @endif

        <a href="{{ route('moviecollection.index') }}" class="btn btn-default">Cancel</a>
        </div>
    </div>    

    {{ Form::close() }}
