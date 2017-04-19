<?php

namespace RobMovieManager;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use Traits\SortableTrait;

    public $table = "movie";  // So Laravel won't try to pluralize it.

    /* "$sortable" is needed to validate use by SortableTrait */
    public $sortable = [
        'id',
        'tmdb_id',
        'imdb_id',
        'title',
        'overview',
        'format',
        'length',
        'release_year',
        'rating',
        'created_at',
        'updated_at',
    ];


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


    public function getSortable() {
        return $this->sortable;
    }

}
