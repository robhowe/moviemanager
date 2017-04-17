<?php

namespace RobMovieManager;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $table = "movie";  // So Laravel won't try to pluralize it.

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tmdb_id',
        'imdb_id',
        'title',
        'overview',
        'format',
        'length',
        'release_year',
        'rating',
    ];

}
