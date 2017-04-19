@extends('layouts.master')

@section("content")
<div class="panel">
    <h1 class="row">Movie Collection</h1>
</div>
<div class="panel">

    <div class="table-responsive">
        <table class="table table-condensed table-striped table-hover moviem-index">
            <thead>
                <tr>
                    <th title="Click to sort by Title">
                        {{ SortableTrait::link_to_sorting_action('title') }}
                    </th>
                    <th title="Click to sort by Format">
                        {{ SortableTrait::link_to_sorting_action('format') }}
                    </th>
                    <th title="Click to sort by Length">
                        {{ SortableTrait::link_to_sorting_action('length') }}
                    </th>
                    <th title="Click to sort by Year">
                        {{ SortableTrait::link_to_sorting_action('release_year') }}
                    </th>
                    <th title="Click to sort by Rating">
                        {{ SortableTrait::link_to_sorting_action('rating') }}
                    </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

            @foreach($movieCollection as $movie)
                <tr>
                    <td>
                        @if (empty($movie->imdb_id))
                            {{ $movie->title }}
                        @else
                            <a href="http://www.imdb.com/title/{{ $movie->imdb_id }}"
                               title="View IMDb info"
                               target="_blank">{{ $movie->title }}</a>
                        @endif
                        @if (!empty($movie->tmdb_id))
                            <span class="moviem-trailer-data" data-tmdb_id="{{ $movie->tmdb_id }}"></span>
                        @endif
                    </td>
                    <td>{{ getDisplayFormat($movie->format) }}</td>
                    <td>{{ getDisplayMinutes($movie->length) }}</td>
                    <td>{{ $movie->release_year }}</td>
                    <td>{{ $movie->rating }}</td>
                    <td>
                        <a href="{{ route('moviecollection.edit', [$movie->id]) }}" class="btn btn-info btn-sm">Edit</a>
                        <a href="{{ url('/moviecollection/' . $movie->id . '/delete') }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6">
                        <a href="{{ route('moviecollection.create') }}" class="btn btn-primary btn-sm">Add a Movie</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

</div>
@endsection
